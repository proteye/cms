<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница Администратора
 */
class Controller_Admin_Index extends Controller_Admin
{
    public function action_index()
    {
        // $adminstat = Widget::load('adminstat');
        $content = View::factory('admin/v_index', array(
        ));

        // Вывод в шаблон.
        $this->template->page_title = 'Главная';
        $this->template->block_center = array($content);
    }
}