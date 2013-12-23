<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User
{
    public function labels()
    {
        return array(
            'username' => 'Логин',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'first_name' => 'Имя',
        );
    }

    public function rules()
    {
        return array(
                'username' => array(
                        array('not_empty'),
                        array('min_length', array(':value', 4)),
                        array('max_length', array(':value', 32)),
                        array(array($this, 'unique'), array('username', ':value')),
                ),
                'password' => array(
                        array('not_empty'),
                ),
                'email' => array(
                        array('not_empty'),
                        array('email'),
                        array(array($this, 'unique'), array('email', ':value')),
                ),
                'first_name' => array(
                        array('not_empty'),
                        array('min_length', array(':value', 2)),
                        array('max_length', array(':value', 250)),
                ),
        );
    }
    
    public static function get_password_validation($values)
    {
        return Validation::factory($values)
                ->rule('password', 'min_length', array(':value', 6))
                ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
    }
}