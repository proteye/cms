<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс страницы Администрирования
 */
class Controller_Admin extends Controller_Base
{
    public $template = 'admin/template';

    public function  before()
    {
        parent::before();
        
        if (!$this->auth->logged_in('admin')) {
            $this->redirect('login');
        }

        $menu_admin = Widget::load('MenuAdmin');

        // Вывод в шаблон
        $this->template->title = 'Администрирование';
        $this->template->styles = array ('public/css/admin.css');
        $this->template->scripts = array ('public/js/jquery.min.js', 'public/js/jquery-ui.min.js', 'public/js/bootstrap.min.js', 'public/ckeditor/ckeditor.js', 'public/js/admin.js', 'public/js/image_upload.js');
        $this->template->menu_admin = $menu_admin;
        $this->template->submenu = null;
    }
    
}