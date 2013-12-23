<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Main extends Controller_Base
{
    public $template = 'main/template';
    
    public function before()
    {
        parent::before();
        
        // Виджеты
        $menu_main = Widget::load('MenuMain');
        /*
        $menu = Widget::load('menu');
        $news = Widget::load('news');
        $cart = Widget::load('cart');
        $topmenu = Widget::load('topmenu');
        $login = Widget::load('login');
        */

        // Вывод в шаблон
        $this->template->styles = array ('public/css/style.css');
        $this->template->scripts = array ('public/js/jquery.min.js', 'public/js/bootstrap.min.js');
        $this->template->menu_main = $menu_main;
        
        /*
        $this->template->cart = $cart;
        $this->template->top_menu = $topmenu;
        $this->template->block_left = array($menu, $login);
        $this->template->block_right = array($news);
        */

        /*    
        $articles = $this->mArticle->getAll();
        $content = View::factory('page/index')->bind('articles', $articles);
        $this->template->title .= '::Главная';
        $this->template->content = $content;
        */
    }
}