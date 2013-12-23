<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс виджетов
 */
class Controller_Widgets extends Controller_Template
{
    public function  before()
    {
        parent::before();
        
        $settings = Kohana::$config->load('settings');
        $this->template->site_name = $settings->site_name;

        if(Request::current()->is_initial()) {
            $this->auto_render = FALSE;
        }
    }
}