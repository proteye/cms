<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Работа с Категориями (разделами) сайта
 */
class Controller_Admin_Settings extends Controller_Admin {
    
    public function before()
    {
        parent::before();
        
        $this->template->page_title = 'Категории';
    }
    
    // Вывод всех категорий.
    public function action_index()
    {
        $categories = ORM::factory('Category')->make_tree();
        
        $content = View::factory('admin/category/v_category_index', array(
            'categories' => $categories,
        ));
        
        // Вывод в шаблон.
        $this->template->block_center = array($content);
    }
    
    // Добавление новой категории.
    public function action_add()
    {
        $data = array('parent_id' => NULL, 'title' => NULL, 'url' => NULL, 'full_url' => NULL, 'title_menu' => NULL, 'keywords' => NULL, 'description' => NULL, 'status' => 1);
        $map = ORM::factory('Category')->make_tree();
        
        if (isset($_POST['submit']))
        {
            $category = ORM::factory('Category');
            $_POST['status'] = isset($_POST['status']) ? 1 : 0;
            $_POST['create_date'] = date('Y-m-d H:i:s');
            $data = Arr::extract($_POST, array('parent_id', 'title', 'url', 'full_url', 'title_menu', 'keywords', 'description', 'create_date', 'status'));
            $data['full_url'] = $category->make_full_url($data['parent_id'], $data['url']);
            $category->values($data);
            
            try {
                $category->save();
                $this->redirect('admin/categories');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/category/v_category_add')
                ->bind('category', $data)
                ->bind('map', $map)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Добавить';
        $this->template->block_center = array($content);
    }
    
    // Редактирование текущей категории.
    public function action_edit()
    {
        $id = (int) $this->request->param('id');
        $category = ORM::factory('Category', $id);
        
        if (!$category->loaded())
            $this->redirect('admin/categories');
        
        $data = $category->as_array();
        $map = $category->make_tree();
        
        if (isset($_POST['submit'])) {
            $_POST['status'] = (isset($_POST['status'])) ? 1 : 0;
            $data = Arr::extract($_POST, array('parent_id', 'title', 'url', 'title_menu', 'keywords', 'description', 'status'));
            $data['full_url'] = $category->make_full_url($data['parent_id'], $data['url']);
            $category->values($data);
            
            try {
                $category->save();
                $category->change_url($id);
                $this->redirect('admin/categories');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/category/v_category_edit')
                ->bind('category', $data)
                ->bind('map', $map)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Редактировать';
        $this->template->block_center = array($content);
    }
    
    // Удаление текущей категории.
    public function action_delete()
    {
        $id = (int) $this->request->param('id');
        $category = ORM::factory('Category', $id);
        
        if (!$category->loaded())
            $this->redirect('admin/categories');
        
        $category->delete();
        $this->redirect('admin/categories');
    }
}