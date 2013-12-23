<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню главное"
 */
class Controller_Widgets_MenuMain extends Controller_Widgets
{

    public $template = 'widgets/w_menumain';    // Шаблон виждета
    
    public function action_index()
    {
        $menu_login = Widget::load('Login');
        $url = preg_replace('/\/.+/', '', Request::initial()->uri()); // текущий url 1 уровня
        
        if (preg_match('/[0-9]+$/', $url, $matches)) {
            $url = preg_replace('/\/[0-9]+$/', '', $url); // url без номера статьи
        }
        
        $select = $url; // текущий раздел 1 уровня
        
        $top_menu = ORM::factory('Category')->menu_tree();
        
        // Вывод в шаблон
        $this->template->select = $select;
        $this->template->menu_login = $menu_login;
        $this->template->top_menu = $top_menu;
    }
}