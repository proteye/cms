<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Новости"
 */
class Controller_Widgets_News extends Controller_Widgets
{

    public $template = 'widgets/w_news';    // Шаблон виждета
    
    public function action_index()
    {
        // В правый блок выводим: НОВОСТИ
        $news = array();
        $months = array('Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
        $category_id = ORM::factory('Category')->where('title', '=', 'Новости')->find()->id;
        $obj_news = ORM::factory('Article')->where('category_id', '=', $category_id)->and_where('public_index', '=', '1')->and_where('status', '=', '1')->order_by('create_date', 'DESC')->find_all();
        
        foreach ($obj_news as $obj) {
            $news[] = $obj->as_array();
        }
        
        for ($i = 0; $i < count($news); $i++) {
            $date = explode(' ', $news[$i]['create_date']);
            $date = explode('-', $date[0]);
            $news[$i]['create_date'] = (int)$date[2] . " {$months[(int)($date[1]-1)]} $date[0]";
        }
        
        // Вывод в шаблон
        $this->template->news = $news;
    }
}