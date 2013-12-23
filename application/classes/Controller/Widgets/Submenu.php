<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Подменю 2-ого уровня"
 */
class Controller_Widgets_Submenu extends Controller_Widgets
{

    public $template = 'widgets/w_submenu';    // Шаблон виждета
    
    public function action_index()
    {
        $submenu = array();
        $url = Request::initial()->uri(); // текущий url
        if (preg_match('/[0-9]+$/', $url, $matches)) {
            $url = preg_replace('/\/[0-9]+$/', '', $url); // url без номера статьи
        }
        
        $category = ORM::factory('Category')->where('full_url', '=', $url)->find();
        $childrens = ORM::factory('Category')->where('parent_id', '=', $category->id)
                ->and_where('status', '=', '1')->order_by('priority')->find_all();
        
        foreach ($childrens as $children) {
            $submenu[] = $children->as_array();
        }
        
        // Вывод в шаблон
        $this->template->submenu = $submenu;
    }
}