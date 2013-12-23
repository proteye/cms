<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-11 11:53:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\Controller\Base.php [ 16 ] in file:line
2013-10-11 11:53:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 11:57:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\admin\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\admin\template.php:6
2013-10-11 11:57:53 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\admin\template.php:6
2013-10-11 11:58:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\admin\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\admin\template.php:6
2013-10-11 11:58:37 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\admin\template.php:6
2013-10-11 11:58:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\admin\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\admin\template.php:6
2013-10-11 11:58:40 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\admin\template.php:6
2013-10-11 12:07:57 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:07:57 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:09:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:09:48 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:09:51 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:09:51 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:10:36 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:10:36 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:10:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:10:48 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:10:50 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:10:50 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:11:50 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\admin\Users.php [ 65 ] in file:line
2013-10-11 12:11:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 12:12:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:12:18 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:12:28 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\admin\Users.php [ 63 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php:63
2013-10-11 12:12:28 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php(63): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\budvrab...', 63, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php:63
2013-10-11 12:12:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:12:41 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:12:49 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\admin\Users.php [ 63 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php:63
2013-10-11 12:12:49 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php(63): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\budvrab...', 63, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php:63
2013-10-11 12:13:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\admin\Users.php [ 63 ] in file:line
2013-10-11 12:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 12:13:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:13:12 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 12:20:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\users\v_users_add.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php:8
2013-10-11 12:20:50 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php:8
2013-10-11 12:21:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_add.php [ 12 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php:12
2013-10-11 12:21:18 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 12, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php:12
2013-10-11 12:26:00 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'username_available' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2013-10-11 12:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'Z:\home\budvrab...', 377, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#4 Z:\home\budvrabote\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#5 Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php(82): Model_Auth_User->create_user(Array, Array)
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 12:59:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\messages\auth\user.php [ 7 ] in file:line
2013-10-11 12:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 13:00:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ')' ~ APPPATH\messages\auth\user.php [ 7 ] in file:line
2013-10-11 13:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 13:07:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\auth\user.php [ 12 ] in file:line
2013-10-11 13:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 13:08:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _external ~ APPPATH\views\admin\users\v_users_add.php [ 5 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php:5
2013-10-11 13:08:11 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 5, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_add.php:5
2013-10-11 13:20:15 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\users\v_users_edit.php [ 8 ] in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 13:20:15 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 8, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(30): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\users\v_users_edit.php:8
2013-10-11 18:53:19 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'admin' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`, `first_name`) VALUES ('admin', 'admin@budvrabote.ru', '52dcada55dbc4c0857d40f1e86e5134e15839b00571740504088ae09e437b243', 'qwe') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\budvrabote\www\modules\database\classes\Kohana\Database\Query.php:251
2013-10-11 18:53:19 --- DEBUG: #0 Z:\home\budvrabote\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\budvrabote\www\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Users.php(82): Model_Auth_User->create_user(Array, Array)
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\modules\database\classes\Kohana\Database\Query.php:251
2013-10-11 19:24:42 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(10): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:29:35 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:29:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(10): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:29:37 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:29:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(10): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:29:51 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(10): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:30:15 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(11): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:30:16 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:30:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(11): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:30:17 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 19:30:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(11): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:30:26 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 242 ] in file:line
2013-10-11 19:30:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 242, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(242): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\admin\template.php(15): Kohana_HTML::script(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 19:32:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_NS_SEPARATOR, expecting ',' or ';' ~ APPPATH\views\admin\template.php [ 10 ] in file:line
2013-10-11 19:32:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:32:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_NS_SEPARATOR, expecting ',' or ';' ~ APPPATH\views\admin\template.php [ 10 ] in file:line
2013-10-11 19:32:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:32:29 --- CRITICAL: ErrorException [ 1 ]: Undefined constant 'r\n' ~ APPPATH\views\admin\template.php [ 10 ] in file:line
2013-10-11 19:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:36:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\admin\template.php [ 4 ] in Z:\home\budvrabote\www\application\views\admin\template.php:4
2013-10-11 19:36:25 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\template.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 4, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\admin\template.php:4
2013-10-11 19:40:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\views\admin\template.php [ 4 ] in file:line
2013-10-11 19:40:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:52:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\views\admin\template.php [ 34 ] in Z:\home\budvrabote\www\application\views\admin\template.php:34
2013-10-11 19:52:22 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 34, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\admin\template.php:34
2013-10-11 19:52:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\classes\Controller\Admin.php [ 25 ] in Z:\home\budvrabote\www\application\classes\Controller\Admin.php:25
2013-10-11 19:52:32 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 25, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\Admin.php:25
2013-10-11 19:52:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:52:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:53:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:53:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:53:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:55:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:55:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:55:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:55:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:55:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:55:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:56:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:56:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:56:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:56:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:56:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:56:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:56:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:56:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 19:56:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 19:56:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:07:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 20:07:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:08:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 20:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:09:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 20:09:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:10:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Widget' not found ~ APPPATH\classes\Controller\Admin.php [ 19 ] in file:line
2013-10-11 20:10:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:12:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\widget.php [ 64 ] in file:line
2013-10-11 20:12:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:13:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\widget.php [ 64 ] in file:line
2013-10-11 20:13:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:13:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\widget.php [ 64 ] in file:line
2013-10-11 20:13:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:15:16 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant REQUEST_URI - assumed 'REQUEST_URI' ~ APPPATH\views\admin\v_index.php [ 3 ] in Z:\home\budvrabote\www\application\views\admin\v_index.php:3
2013-10-11 20:15:16 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\v_index.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\budvrab...', 3, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\v_index.php:3
2013-10-11 20:15:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\v_index.php [ 12 ] in Z:\home\budvrabote\www\application\views\admin\v_index.php:12
2013-10-11 20:15:54 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\v_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 12, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\v_index.php:12
2013-10-11 20:16:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\admin\v_index.php [ 18 ] in file:line
2013-10-11 20:16:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:16:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\v_index.php [ 16 ] in Z:\home\budvrabote\www\application\views\admin\v_index.php:16
2013-10-11 20:16:10 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\v_index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 16, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\v_index.php:16
2013-10-11 20:17:40 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant REQUEST_URI - assumed 'REQUEST_URI' ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:17:40 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\budvrab...', 3, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:19:04 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in file:line
2013-10-11 20:19:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:21:05 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in file:line
2013-10-11 20:21:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:21:17 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in file:line
2013-10-11 20:21:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:21:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _params ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:21:24 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 3, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:21:29 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Route::uri() should not be called statically ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:21:29 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\budvrab...', 3, Array)
#1 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(3): Kohana_Route::uri()
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\budvrabote\www\application\classes\widget.php(83): Kohana_Request->execute()
#11 Z:\home\budvrabote\www\application\classes\widget.php(37): Widget->render()
#12 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#13 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:21:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Route::get(), called in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php on line 3 and defined ~ SYSPATH\classes\Kohana\Route.php [ 105 ] in Z:\home\budvrabote\www\system\classes\Kohana\Route.php:105
2013-10-11 20:21:42 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Route.php(105): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\budvrab...', 105, Array)
#1 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(3): Kohana_Route::get()
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\budvrabote\www\application\classes\widget.php(83): Kohana_Request->execute()
#11 Z:\home\budvrabote\www\application\classes\widget.php(37): Widget->render()
#12 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#13 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Route.php:105
2013-10-11 20:22:29 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant REQUEST_URI - assumed 'REQUEST_URI' ~ APPPATH\views\widgets\w_menuadmin.php [ 3 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:22:29 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\budvrab...', 3, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:3
2013-10-11 20:23:40 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant REQUEST_URI - assumed 'REQUEST_URI' ~ APPPATH\views\widgets\w_menuadmin.php [ 1 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:1
2013-10-11 20:23:40 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\budvrab...', 1, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:1
2013-10-11 20:40:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 6 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:6
2013-10-11 20:40:45 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\Widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\Widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:6
2013-10-11 20:40:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 6 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:6
2013-10-11 20:40:55 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\Widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\Widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:6
2013-10-11 20:41:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\widgets\w_menuadmin.php [ 6 ] in file:line
2013-10-11 20:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:41:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\widgets\w_menuadmin.php [ 6 ] in file:line
2013-10-11 20:41:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 20:41:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\widgets\w_menuadmin.php [ 6 ] in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:6
2013-10-11 20:41:20 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\application\classes\Widget.php(83): Kohana_Request->execute()
#10 Z:\home\budvrabote\www\application\classes\Widget.php(37): Widget->render()
#11 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#12 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#15 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\budvrabote\www\application\views\widgets\w_menuadmin.php:6
2013-10-11 20:51:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\main\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:51:42 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\main\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:52:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\main\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:52:46 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\main\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:52:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\main\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:52:55 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\main\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:52:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: description ~ APPPATH\views\main\template.php [ 6 ] in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:52:56 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\main\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 6, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\main\template.php:6
2013-10-11 20:53:29 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 20:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\main\template.php(21): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 20:53:57 --- CRITICAL: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\HTML.php [ 209 ] in file:line
2013-10-11 20:53:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', 'Z:\home\budvrab...', 209, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\HTML.php(209): strpos(Array, '://')
#2 Z:\home\budvrabote\www\application\views\main\template.php(21): Kohana_HTML::style(Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#4 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2013-10-11 20:54:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\views\main\template.php [ 34 ] in Z:\home\budvrabote\www\application\views\main\template.php:34
2013-10-11 20:54:10 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\main\template.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 34, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\application\views\main\template.php:34
2013-10-11 23:13:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 1 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:13:42 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 1, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:15:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 1 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:15:10 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 1, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:16:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 1 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:16:21 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 1, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:18:47 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:17
2013-10-11 23:18:47 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(17): Kohana_ORM->find()
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:17
2013-10-11 23:19:03 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:17
2013-10-11 23:19:03 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(17): Kohana_ORM->find()
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:17
2013-10-11 23:19:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Categories::category() ~ APPPATH\classes\Controller\admin\Categories.php [ 17 ] in file:line
2013-10-11 23:19:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:19:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Categories::category() ~ APPPATH\classes\Controller\admin\Categories.php [ 17 ] in file:line
2013-10-11 23:19:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:22:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\Controller\admin\Categories.php [ 17 ] in file:line
2013-10-11 23:22:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:23:22 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\views\admin\category\v_category_index.php [ 3 ] in file:line
2013-10-11 23:23:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:25:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\admin\Categories.php [ 17 ] in file:line
2013-10-11 23:25:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:26:07 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::where(), called in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php on line 17 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1849 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:1849
2013-10-11 23:26:07 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\budvrab...', 1849, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(17): Kohana_ORM->where()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:1849
2013-10-11 23:28:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 1 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:28:06 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 1, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:1
2013-10-11 23:28:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 2 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:2
2013-10-11 23:28:17 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 2, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:2
2013-10-11 23:28:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 5 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:35 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 5, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\views\admin\category\v_category_index.php [ 5 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:47 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 5, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 5 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:50 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 5, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$url ~ APPPATH\views\admin\category\v_category_index.php [ 5 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:28:56 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\budvrab...', 5, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:5
2013-10-11 23:31:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\admin\category\v_category_index.php [ 2 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:2
2013-10-11 23:31:51 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 2, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_index.php:2
2013-10-11 23:41:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:41:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:42:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:42:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:42:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:42:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:42:33 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:42:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:42:51 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:42:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:42:53 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:42:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:43:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:43:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:43:20 --- CRITICAL: Kohana_Exception [ 0 ]: The children property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:20 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('children', Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Kohana_ORM->__set('children', Array)
#2 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('3')
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('1')
#4 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Controller_Admin_Categories->make_tree()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:50 --- CRITICAL: Kohana_Exception [ 0 ]: The children property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:50 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('children', Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Kohana_ORM->__set('children', Array)
#2 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('3')
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('1')
#4 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Controller_Admin_Categories->make_tree()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:52 --- CRITICAL: Kohana_Exception [ 0 ]: The children property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:52 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('children', Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Kohana_ORM->__set('children', Array)
#2 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('3')
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('1')
#4 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Controller_Admin_Categories->make_tree()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:55 --- CRITICAL: Kohana_Exception [ 0 ]: The children property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:43:55 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('children', Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Kohana_ORM->__set('children', Array)
#2 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('3')
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(37): Controller_Admin_Categories->make_tree('1')
#4 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Controller_Admin_Categories->make_tree()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-11 23:44:15 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:44:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 37 ] in file:line
2013-10-11 23:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:46:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 38 ] in file:line
2013-10-11 23:46:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:46:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\admin\Categories.php [ 33 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:33
2013-10-11 23:46:50 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 33, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Controller_Admin_Categories->make_tree()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:33
2013-10-11 23:46:57 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 33 ] in file:line
2013-10-11 23:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:47:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\admin\Categories.php [ 33 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:33
2013-10-11 23:47:05 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 33, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Controller_Admin_Categories->make_tree()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:33
2013-10-11 23:49:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start_level ~ APPPATH\classes\Controller\admin\Categories.php [ 18 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:18
2013-10-11 23:49:12 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 18, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:18
2013-10-11 23:49:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\Controller\admin\Categories.php [ 22 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:22
2013-10-11 23:49:27 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 22, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:22
2013-10-11 23:49:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\Controller\admin\Categories.php [ 22 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:22
2013-10-11 23:49:29 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 22, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:22
2013-10-11 23:49:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\Controller\admin\Categories.php [ 22 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:22
2013-10-11 23:49:30 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 22, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php:22
2013-10-11 23:55:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 39 ] in file:line
2013-10-11 23:55:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:55:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 39 ] in file:line
2013-10-11 23:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-11 23:55:45 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\admin\Categories.php [ 39 ] in file:line
2013-10-11 23:55:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line