<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Вход"
 */
class Controller_Widgets_Login extends Controller_Widgets
{
    
    public $template = 'widgets/w_login';

    public function action_index()
    {
        $auth = Auth::instance();
        
        $this->template->auth = $auth;
        $this->template->user = $auth->get_user();
    }
}