<?php defined('SYSPATH') OR die('No direct script access.');

class HTML extends Kohana_HTML
{
    // Функция рекурсивного вывода дерева категорий сайта.
    public static function print_map($map)
    {
        if(!empty($map))
        {
            echo '<ul class="sorting">';
            foreach($map as $page)
            {
                echo "<li page_id=\"{$page['id']}\" class=\"text-info\">{$page['title']}";
                echo " <a href=\"".URL::site('admin/categories/edit')."/{$page['id']}\"><i class=\"icon-pencil\"></i></a>";
                echo " <a href=\"".URL::site('admin/categories/delete')."/{$page['id']}\" onclick=\"return confirm('Вы действительно хотите удалить Раздел и ВСЕ Статьи, связанные с ней?') ? true : false;\"><i class=\"icon-remove\"></i></a>";
                self::print_map($page['children']);
                echo '</li>';
            }
            echo '</ul>';
        }
    }
    
    // Функция вывода TOP меню сайта до 3 уровня.
    public static function top_menu($map, $select = null)
    {
        if(!empty($map))
        {
            foreach ($map as $page)
            {
                // Выводим 1-ый уровень меню.
                if ($select == $page['url']) {
                    echo !empty($page['children']) ? '<li class="active dropdown">' : '<li class="active">';
                    if (!empty($page['children']))
                        echo HTML::anchor($page['url'], $page['title'] . '<b class="caret"></b>', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'));
                    else
                        echo HTML::anchor($page['url'], $page['title']);
                }
                else {
                    echo !empty($page['children']) ? '<li class="dropdown">' : '<li>';
                    if (!empty($page['children']))
                        echo HTML::anchor($page['url'], $page['title'] . '<b class="caret"></b>', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'));
                    else
                        echo HTML::anchor($page['url'], $page['title']);
                }
                // Выводим 2-ой уровень меню.
                if (!empty($page['children'])) {
                    echo '<ul class="dropdown-menu">';
                    foreach ($page['children'] as $children) {
                        echo !empty($children['children']) ? '<li class="dropdown-submenu">' : '<li>';
                        echo HTML::anchor($children['url'], $children['title']);
                        // Выводим 3-ий уровень меню.
                        if (!empty($children['children'])) {
                            echo '<ul class="dropdown-menu">';
                            foreach ($children['children'] as $children) {
                                echo '<li>' . HTML::anchor($children['url'], $children['title']) . '</li>';
                            }
                            echo '</ul>';
                        }
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
            }
        }
    }
    
    // Функция вывода Хлебных Крошек.
    public static function breadcrumbs($data)
    {
        $count = count($data);
        echo '<ul class="breadcrumb">';
        echo '<li>' . HTML::anchor('/', 'Главная') . '<span class="divider">/</span></li>';
        foreach ($data as $page) {
            if (!--$count)
                echo '<li class="active">' . $page['title'] . '</li>';
            else {
                echo '<li>' . HTML::anchor($page['url'], $page['title']) . '<span class="divider">/</span></li>';
            }
        }
        echo '</ul>';
    }
}