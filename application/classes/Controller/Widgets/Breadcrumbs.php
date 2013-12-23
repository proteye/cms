<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Хлебные крошки"
 */
class Controller_Widgets_Breadcrumbs extends Controller_Widgets
{

    public $template = 'widgets/w_breadcrumbs';    // Шаблон виждета
    
    public function action_index()
    {
        $url = Request::initial()->uri(); // текущий url
        if (preg_match('/[0-9]+$/', $url, $matches)) {
            $url = preg_replace('/\/[0-9]+$/', '', $url); // url без номера статьи
        }
        
        $category = ORM::factory('Category')->where('full_url', '=', $url)->find();
        $data = ORM::factory('Category')->breadcrumbs($category->id);
        
        // Вывод в шаблон
        $this->template->data = $data;
    }
}