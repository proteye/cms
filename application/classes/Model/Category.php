<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM
{
    protected $_table_name = 'categories';
    
    public function labels()
    {
        return array(
            'title' => 'Заголовок',
            'url' => 'Адрес страницы',
            'parent_id' => 'Родительский раздел',
        );
    }
    
    public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'url' => array(
                array('not_empty'),
            ),
            'parent_id' => array(
                array(array($this, 'parent_not_id'), array(':data')),
            ),
        );
    }
    
    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            'title' => array(
                array('strip_tags'),
            ),
        );
    }
    
    public function make_tree($start_level = 0)
    {
        $map = array();
        $pages = ORM::factory('Category')->where('parent_id', '=', $start_level)->order_by('priority')->find_all();
        foreach ($pages as $page) {
            $arr_pages[] = array('id' => $page->id, 'title' => $page->title,);
        }
        // $pages = $this->db->Select("SELECT * FROM pages WHERE id_parent = '$start_level'");
        
        if(!empty($arr_pages))
            foreach($arr_pages as $page) {
                $page['children'] = $this->make_tree($page['id']);
                $map[] = $page;
            }
        return $map;
    }
    
    public function make_full_url($parent_id, $url)
    {
        if($parent_id == 0)
            return $url;
        
        $category = ORM::factory('Category')->where('id', '=', $parent_id)->find();
        return $category->full_url . '/' .  $url;
    }
    
    public function change_url($parent_id)
    {
        $category = ORM::factory('Category');
        $children = $category->where('parent_id', '=', $parent_id)->find_all();
        $cat_temp = array();
        
        foreach($children as $child)
        {
            $ch = $child->as_array();
            $cat_temp['full_url'] = $this->make_full_url($ch['parent_id'], $ch['url']);
            $category = ORM::factory('Category', $ch['id'])->values($cat_temp);
            if ($category->loaded())
                $category->save();
            $this->change_url($ch['id']);
        }
    }
    
    public function parent_not_id($data)
    {
        if ($data['id'] == $data['parent_id'])
            return FALSE;
        else
            return TRUE;
    }
    
    public function menu_tree($start_level = 0)
    {
        $map = array();
        $pages = ORM::factory('Category')->where('parent_id', '=', $start_level)->and_where('status', '=', '1')->order_by('priority')->find_all();
        foreach ($pages as $page) {
            $title = $page->title_menu ? $page->title_menu : $page->title;
            $arr_pages[] = array('id' => $page->id, 'title' => $title, 'url' => $page->full_url);
        }
        
        if(!empty($arr_pages))
            foreach($arr_pages as $page) {
                $page['children'] = $this->menu_tree($page['id']);
                $map[] = $page;
            }
        return $map;
    }
    
    public function breadcrumbs($id)
    {
        $data = array();
        $category = ORM::factory('Category')->where('id', '=', $id)->find();
        $title = $category->title_menu ? $category->title_menu : $category->title;
        $data[] = array('title' => $title, 'url' => $category->full_url);
        
        while ($category->parent_id != 0) {
            $id = $category->parent_id;
            $category = ORM::factory('Category')->where('id', '=', $id)->find();
            $title = $category->title_menu ? $category->title_menu : $category->title;
            $data[] = array('title' => $title, 'url' => $category->full_url);
        }
        return array_reverse($data);
    }
}