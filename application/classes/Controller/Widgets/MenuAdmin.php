<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Меню администратора"
 */
class Controller_Widgets_MenuAdmin extends Controller_Widgets
{

    public $template = 'widgets/w_menuadmin';    // Шаблон виждета
    
    public function action_index()
    {
        $menu_login = Widget::load('Login');
        $select = strtolower(Request::initial()->controller());

        $menu = array(
            'Главная' => array('index'),
            'Категории' => array('categories'),
            'Статьи' => array('articles'),
            'Галерея' => array('gallery'),
            'Пользователи' => array('users'),
            'Настройки' => array('settings'),
        );

        // Вывод в шаблон
        $this->template->menu = $menu;
        $this->template->select = $select;
        $this->template->menu_login = $menu_login;
    }
}