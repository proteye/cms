<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends ORM
{
    protected $_table_name = 'articles';
    
    protected $_belongs_to = array(
        'category' => array(
            'model' => 'Category',
            'foreign_key' => 'category_id',
        ),
    );
    
    public function labels()
    {
        return array(
            'title' => 'Заголовок',
            'content' => 'Текст статьи',
        );
    }
    
    public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'content' => array(
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
            'title' => array(
                array('strip_tags'),
            ),
        );
    }
}