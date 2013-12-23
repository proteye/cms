<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Работа со Статьями
 */
class Controller_Admin_Articles extends Controller_Admin {
    
    public function before()
    {
        parent::before();
        
        $this->template->page_title = 'Статьи';
    }
    
    // Вывод всех статей.
    public function action_index()
    {
        // Пагинация
        $items = 10; // объектов на странице
        $offset = $this->request->query('page') ? ($this->request->query('page')-1)*$items : 0; // сдвиг (шаг)
        $total_items = ORM::factory('Article')->count_all(); // общее количество объектов
        $pagination = Pagination::factory(array('total_items' => $total_items, 'items_per_page' => $items)); // загрузка пагинации
        
        $obj_articles = ORM::factory('Article')->order_by('create_date', 'DESC')->offset($offset)->limit($items)->find_all();
        
        foreach ($obj_articles as $article) {
            $article->content = strip_tags(UTF8::substr($article->content, 0, 120) . '...');
            $temp_art = $article->as_array();
            $temp_art['category_title'] = $article->category->title;
            $articles[] = $temp_art;
        }
        
        $content = View::factory('admin/article/v_article_index')
            ->bind('articles', $articles)
            ->bind('pagination', $pagination);
        
        // Вывод в шаблон.
        $this->template->block_center = array($content);
    }
    
    // Добавление новой статьи.
    public function action_add()
    {
        $map = ORM::factory('Category')->make_tree();
        
        if (isset($_POST['submit']))
        {
            $article = ORM::factory('Article');
            $_POST['public_index'] = isset($_POST['public_index']) ? 1 : 0;
            $_POST['status'] = isset($_POST['status']) ? 1 : 0;
            $_POST['create_date'] = date('Y-m-d H:i:s');
            
            $data = Arr::extract($_POST, array('title', 'content', 'create_date', 'category_id', 'public_index', 'status'));
            $data['user_id'] = $this->user->id;
            $article->values($data);
            
            try {
                $article->save();
                $this->redirect('admin/articles');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/article/v_article_add')
                ->bind('article', $data)
                ->bind('map', $map)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Добавить';
        $this->template->block_center = array($content);
    }
    
    // Редактирование текущей статьи.
    public function action_edit()
    {
        $id = (int) $this->request->param('id');
        $article = ORM::factory('Article', $id);
        
        if (!$article->loaded())
            $this->redirect('admin/articles');
        
        $data = $article->as_array();
        $map = ORM::factory('Category')->make_tree();
        
        if (isset($_POST['submit'])) {
            $_POST['public_index'] = isset($_POST['public_index']) ? 1 : 0;
            $_POST['status'] = isset($_POST['status']) ? 1 : 0;
            
            $data = Arr::extract($_POST, array('title', 'content', 'category_id', 'public_index', 'status'));
            $data['user_id'] = $this->user->id;
            $article->values($data);
            
            try {
                $article->save();
                $this->redirect('admin/articles');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/article/v_article_edit')
                ->bind('article', $data)
                ->bind('map', $map)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Редактировать';
        $this->template->block_center = array($content);
    }
    
    // Удаление текущей статьи.
    public function action_delete()
    {
        $id = (int) $this->request->param('id');
        $article = ORM::factory('Article', $id);
        
        if (!$article->loaded())
            $this->redirect('admin/articles');
        
        $article->delete();
        $this->redirect('admin/articles');
    }
}