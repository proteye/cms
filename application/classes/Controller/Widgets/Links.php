<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Полезные ссылки"
 */
class Controller_Widgets_Links extends Controller_Widgets
{

    public $template = 'widgets/w_links';    // Шаблон виждета
    
    public function action_index()
    {
        $links = array(
            array ('title' => 'localhost', 'url' => 'http://localhost/'),
        );
        
        // Вывод в шаблон
        $this->template->links = $links;
    }
}