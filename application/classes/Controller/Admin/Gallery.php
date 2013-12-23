<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Работа с Галереей изображений
 */
class Controller_Admin_Gallery extends Controller_Admin {
    
    public function before()
    {
        parent::before();
        
        $this->template->page_title = 'Галерея';
    }
    
    // Вывод всех галерей.
    public function action_index()
    {
        $gallery = ORM::factory('Gallery')->find_all();
        
        $content = View::factory('admin/gallery/v_gallery_index')
            ->bind('gallery', $gallery);
        
        // Вывод в шаблон.
        $this->template->block_center = array($content);
    }
    
    // Добавление новой галереи.
    public function action_add()
    {
        if (isset($_POST['submit'])) {
            $gallery = ORM::factory('Gallery');
            $data = Arr::extract($_POST, array('name', 'title'));
            $gallery->values($data);
            
            try {
                $gallery->save();
                $this->redirect('admin/gallery');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/gallery/v_gallery_add')
                ->bind('gallery', $data)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Добавить';
        $this->template->block_center = array($content);
    }
    
    // Редактирование текущей галереи.
    public function action_edit()
    {
        $id = (int) $this->request->param('id');
        $gallery = ORM::factory('Gallery', $id);
        
        if (!$gallery->loaded())
            $this->redirect('admin/gallery');
        
        $data = $gallery->as_array();
        
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('name', 'title'));
            $gallery->values($data);
            
            try {
                $gallery->save();
                $this->redirect('admin/gallery');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/gallery/v_gallery_edit')
                ->bind('gallery', $data)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Редактировать';
        $this->template->block_center = array($content);
    }
    
    // Удаление текущей галереи.
    public function action_delete()
    {
        $id = (int) $this->request->param('id');
        $gallery = ORM::factory('Gallery', $id);
        
        if (!$gallery->loaded())
            $this->redirect('admin/gallery');
        
        $gallery->delete();
        $this->redirect('admin/gallery');
    }
    
    public function action_upload()
    {
        $id = (int) $this->request->param('id');
        $gallery = ORM::factory('Gallery', $id);
        
        $content = View::factory('admin/gallery/v_gallery_upload')
                ->bind('gallery', $gallery)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Загрузка изображений';
        $this->template->block_center = array($content);
    }

    public function action_images()
    {
        $settings = Kohana::$config->load('settings');
        $id = (int) $this->request->param('id');
        $gallery = ORM::factory('Gallery', $id);
        
        if (!$gallery->loaded())
            $this->redirect('admin/gallery');
        
        $images = $gallery->images->find_all();
        
        if (isset($_POST['delete'])) {
            $image = ORM::factory('Image', $_POST['image_id']);
            $gallery->remove('images', $image);
            $img_path = $image->path;
            unlink($settings->img_dir . $img_path);
            unlink($settings->img_small_dir . $img_path);
            $image->delete();
            $this->redirect('admin/gallery/images/' . $id);
        }
        
        $content = View::factory('admin/gallery/v_gallery_images')
                ->bind('gallery', $gallery)
                ->bind('images', $images)
                ->bind('errors', $errors)
                ->bind('img_small_dir', $settings->img_small_dir);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Изображения';
        $this->template->block_center = array($content);
    }
    
    public function action_edit_image()
    {
        $id = (int) $this->request->param('id');
        $image = ORM::factory('Image', $id);
        
        if (!$image->loaded())
            $this->redirect('admin/gallery');
        
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('title', 'alt'));
            $image->values($data);
            
            try {
                $image->update();
                $this->redirect('admin/gallery');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
            }
        }
        
        $content = View::factory('admin/gallery/v_gallery_edit_image')
                ->bind('image', $data)
                ->bind('errors', $errors);
        
        // Вывод в шаблон.
        $this->template->page_title .= ' :: Редактирование изображения';
        $this->template->block_center = array($content);
    }
}