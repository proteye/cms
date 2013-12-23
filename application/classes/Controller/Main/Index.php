<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница и обработка всех URL
 */
class Controller_Main_Index extends Controller_Main
{
    public function  before()
    {
        parent::before();
    }
    
    public function action_index()
    {
        $rblock = '';
        $breadcrumbs = Widget::load('Breadcrumbs'); // хлебные крошки
        $submenu = Widget::load('Submenu'); // виджет "Подменю"
        $news = Widget::load('News'); // виджет "Новости"
        $links = Widget::load('Links'); // виджет "Полезные ссылки"
        $result = false; // флаг, определящий существует ли страница или 404
        $url = $this->request->param('url'); // текущий url
        $article_id = NULL; // номер статьи
        
        if (preg_match('/[0-9]+$/', $url, $matches)) {
            $article_id = $matches[0]; // id статьи
            $url = preg_replace('/\/[0-9]+$/', '', $url); // url без номера статьи
        }
        
        $categories = ORM::factory('Category')->find_all();
        
        // Проверяем есть ли текущий URL в БД таблице Category.
        foreach ($categories as $category) {
            if ($url == $category->full_url) {
                $result = true;
                $category_id = $category->id;
            }
        }

        // Если в базе нет такого URL и не '/', то выводим ошибку 404.
        if (!$result && !empty($url)) {
            throw new HTTP_Exception_404();
        }
        
        //
        // Если URL = '/', то выводим начальную страницу index.
        //
        if (empty($url)) {
            $this->template->page_title = 'Главная';
            $articles = ORM::factory('Article')->where('public_index', '=', '1')->and_where('status', '=', '1')->and_where('category_id', '!=', '5')->order_by('create_date', 'DESC')->limit(5)->find_all();
            $ind_content = ORM::factory('Article')->where('category_id', '=', '0')->and_where('status', '=', '1')->order_by('create_date', 'DESC')->find_all();
            
            $content = View::factory('main/v_index')
                    ->bind('ind_content', $ind_content)
                    ->bind('articles', $articles)
                    ->bind('auth', $this->auth);
            
            // Формируем ПРАВЫЙ БЛОК.
            $rblock = View::factory('main/v_rblock');
            if ($news != '')
                $rblock->bind('news', $news);
            if ($links != '')
                $rblock->bind('links', $links);
        }
        //
        // Если же URL из БД, то выводим конкретную Статью или список статей текущей Категории.
        //
        else {
            $this->template->title = $this->template->page_title = ORM::factory('Category', $category_id)->title;
            $descr = ORM::factory('Category', $category_id)->description;
            $keyw = ORM::factory('Category', $category_id)->keywords;
            if ($descr)
                $this->template->site_description = $descr;
            if ($keyw)
                $this->template->site_keywords = $keyw;
            //
            // Вывод текущей Статьи.
            //
            if ($article_id) {
                $article = ORM::factory('Article', $article_id)->as_array();
                $article['category_full_url'] = ORM::factory('Article', $article_id)->category->full_url;
                $content = View::factory('main/article/v_article_view')
                        ->bind('article', $article)
                        ->bind('breadcrumbs', $breadcrumbs);
            }
            //
            // Вывод списка статей текущей Категории.
            //
            else {
                // Пагинация
                $items = 10; // объектов на странице
                $offset = $this->request->query('page') ? ($this->request->query('page')-1)*$items : 0; // сдвиг (шаг)
                $total_items = ORM::factory('Article')->where('category_id', '=', $category_id)->and_where('status', '=', '1')->count_all(); // общее количество объектов
                $pagination = Pagination::factory(array('total_items' => $total_items, 'items_per_page' => $items)); // загрузка пагинации
        
                $category = ORM::factory('Category')->where('id', '=', $category_id)->find()->as_array(); // данные о текущей категории
                $obj_articles = ORM::factory('Article')->where('category_id', '=', $category_id)->and_where('status', '=', '1')
                        ->order_by('create_date', 'DESC')->offset($offset)->limit($items)->find_all(); // выбор всех статей категории, учитывая пагинацию

                foreach ($obj_articles as $article) {
                    $article->content = UTF8::substr(strip_tags($article->content), 0, 500) . '...';
                    $articles[] = $article->as_array();
                }
                
                $content = View::factory('main/category/v_category_index')
                        ->bind('category', $category)
                        ->bind('articles', $articles)
                        ->bind('url', $url)
                        ->bind('breadcrumbs', $breadcrumbs)
                        ->bind('submenu', $submenu)
                        ->bind('pagination', $pagination);
                
                // Формируем ПРАВЫЙ БЛОК.
                $rblock = View::factory('main/v_rblock');
                if ($news != '' && $category['title'] != 'Новости')
                    $rblock->bind('news', $news);
                if ($links != '')
                    $rblock->bind('links', $links);
            }
        }
        
        // Вывод в шаблон.
        $this->template->block_center = array($content);
        $this->template->block_right = $rblock ? array($rblock) : null;
    }
}