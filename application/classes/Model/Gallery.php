<?php defined('SYSPATH') or die('No direct script access.');

class Model_Gallery extends ORM
{
    protected $_table_name = 'gallery';
    
    protected $_has_many = array(
       'images' => array(
            'model' => 'Image',
            'foreign_key' => 'gallery_id',
            'through' => 'gallery_images',
            'far_key'      => 'image_id',
        ),
    );
    
    public function labels()
    {
        return array(
            'name' => 'Имя',
            'title' => 'Заголовок',
        );
    }
    
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
            ),
            'title' => array(
                array('not_empty'),
            ),
        );
    }
    
    public function filters()
    {
        return array(
            TRUE => array(
                array('trim'),
            ),
            TRUE => array(
                array('strip_tags'),
            ),
        );
    }
}