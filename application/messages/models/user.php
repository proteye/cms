<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'username' => array(
            'not_empty' => 'Вы должны указать свой Логин.',
            'min_length' => 'The username must be at least :param2 characters long.',
            'max_length' => 'The username must be less than :param2 characters long.',
            'username_available' => 'This username is already in use.',
            'unique' => 'Такой Логин уже существует.',
    ),
    'email' => array(
            'not_empty' => 'Вы должны указать свой E-Mail.',
            'min_length' => 'E-Mail слишком короткий, он должен превышать :param2 символа.',
            'max_length' => 'E-Mail слишком длинный.',
            'email' =>	'Пожалуйста, введите правильный E-Mail.',
            'unique' => 'Такой E-Mail уже существует.',
    ),
    'no_user' => 'Неверный логин или пароль',
);