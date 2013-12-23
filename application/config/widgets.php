<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Запрет показа виджета
 * 'виджет' => array(
 *      'контроллер' => array('экшен1', 'экшен2')
 *  )
 *
 */

return array(
    'MenuMain' => array(
        'Auth' => array('login', 'register'),
    ),
);
