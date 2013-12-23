<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
abstract class Controller_Base extends Controller_Template
{
    protected $user;
    protected $auth;
    
    public function before()
    {
        parent::before();
        
        $settings = Kohana::$config->load('settings');
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();

        // Вывод в шаблон
        $this->template->site_name = $settings->site_name;
        $this->template->site_description = $settings->site_description;
        $this->template->site_keywords = $settings->site_keywords;
        $this->template->page_title = null;
        $this->template->title = null;

        // Подключаем стили и скрипты
        $this->template->styles = array();
        $this->template->scripts = array();

        // Подключаем блоки
        $this->template->block_left = null;
        $this->template->block_center = null;
        $this->template->block_right = null;
    }
}