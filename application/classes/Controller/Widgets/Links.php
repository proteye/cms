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
            array ('title' => 'Блог Маранафа', 'url' => 'http://maran-afa.blogspot.ru/'),
            array ('title' => 'Igreja Crista "Maranata"', 'url' => 'http://www.igrejacristamaranata.org.br/'),
            array ('title' => 'Церковь в Минске', 'url' => 'http://goc.belchurch.org/'),
            array ('title' => 'Церковь в Глазове', 'url' => 'http://www.glazovchurch.org/'),
        );
        
        // Вывод в шаблон
        $this->template->links = $links;
    }
}