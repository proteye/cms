<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Пользователи
 */
class Controller_Admin_Users extends Controller_Admin
{
    public function before()
    {
        parent::before();

        $this->template->page_title = 'Пользователи';
        // $this->template->submenu = Widget::load('menuusers');
    }
    
    // Вывод списка всех пользователей.
    public function action_index()
    {
        $users = ORM::factory('User')->find_all();

        $content = View::factory('admin/users/v_users_index', array(
            'users' => $users,
        ));

        // Вывод в шаблон
        $this->template->block_center = array($content);
    }

    // Добавить пользователя.
    public function action_add()
    {
        $data = array('username' => NULL, 'first_name' => NULL, 'email' => NULL);
        
        if (isset($_POST['submit']))
        {
            $user = ORM::factory('User');
            $data = Arr::extract($_POST, array('email', 'username', 'first_name', 'password', 'password_confirm'));
            
            try {
                $user->create_user($data, array('email', 'username', 'first_name', 'password'));
 
                $role = ORM::factory('Role')->where('name', '=', 'login')->find();
                $user->add('roles', $role);

                $this->redirect('admin/users');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }

        $content = View::factory('admin/users/v_users_add')
                ->bind('user', $data)
                ->bind('errors', $errors);

        // Вывод в шаблон
        $this->template->page_title .= ' :: Добавить';
        $this->template->block_center = array($content);
    }
    
    // Редактировать текущего пользователя.
    public function action_edit()
    {
        $id = (int) $this->request->param('id');
        $user = ORM::factory('User', $id);
        
        if (!$user->loaded())
            $this->redirect('admin/users');
        
        $data = $user->as_array();
        
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('email', 'username', 'first_name', 'password', 'password_confirm'));
            
            try {
                $user->update_user($data);
                $this->redirect('admin/users');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }

        $content = View::factory('admin/users/v_users_edit')
                ->bind('user', $data)
                ->bind('errors', $errors);

        // Вывод в шаблон
        $this->template->page_title .= ' :: Редактировать';
        $this->template->block_center = array($content);
    }
    
    // Удалить текущего пользователя.
    public function action_delete()
    {
        $id = (int) $this->request->param('id');
        $users = ORM::factory('User', $id);

        if(!$users->loaded()){
            $this->redirect('admin/users');
        }

        $users->delete();
        $this->redirect('admin/users');
    }
}