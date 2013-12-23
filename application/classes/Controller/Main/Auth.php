<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница Администратора
 */
class Controller_Main_Auth extends Controller_Main
{
    public function action_login()
    {
        if (isset($_POST['submit']))
        {
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);

            if ($status) {
                if(Auth::instance()->logged_in('admin')) {
                    $this->redirect('admin');
                }
                
                $this->redirect();
            }
            else {
                $errors = array(Kohana::message('models/user', 'no_user'));
            }
        }
        
        $content = View::factory('main/auth/v_auth_login')
                ->bind('post', $data)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title = 'Авторизация';
        $this->template->block_center = array($content);
    }
    
    public function action_logout()
    {
        if (Auth::instance()->logout()) {
            $this->redirect();
        }
    }
    
    public function action_register()
    {
        $content = View::factory('main/auth/v_auth_register', array(
        ));

        // Вывод в шаблон.
        $this->template->page_title = 'Регистрация';
        $this->template->block_center = array($content);
    }
}