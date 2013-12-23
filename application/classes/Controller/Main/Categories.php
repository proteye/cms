<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница Администратора
 */
class Controller_Main_Categories extends Controller_Main
{
    public function action_index()
    {
        $result = false;
        $url = $this->request->param('url');
        $categories = ORM::factory('Category')->find_all();
        
        foreach ($categories as $category) {
            if ($url == $category->full_url)
                $result = true;
        }
        
        if (!$result && !empty($url)) {
            throw new HTTP_Exception_404();
        }
        
        if (empty($url)) {
            $content = View::factory('main/v_index')
                    ->bind('auth', $auth)
                    ->bind('user', $user);
        }
        else {
            $content = View::factory('main/category/v_category_index')
                    ->bind('auth', $auth)
                    ->bind('user', $user);            
        }
        
        
        $auth = Auth::instance();
        $user = $auth->get_user();
        
        // Вывод в шаблон.
        $this->template->page_title = 'Главная';
        $this->template->block_center = array($content);
    }
}