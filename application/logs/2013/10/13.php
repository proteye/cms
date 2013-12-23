<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-13 13:50:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Categories::make_tree() ~ APPPATH\classes\Controller\admin\Categories.php [ 17 ] in file:line
2013-10-13 13:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 13:51:21 --- CRITICAL: ErrorException [ 1 ]: Call to protected method Model_Category::make_tree() from context 'Controller_Admin_Categories' ~ APPPATH\classes\Controller\admin\Categories.php [ 17 ] in file:line
2013-10-13 13:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 13:51:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Categories::make_tree() ~ APPPATH\classes\Controller\admin\Categories.php [ 45 ] in file:line
2013-10-13 13:51:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 13:52:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Categories::make_full_url() ~ APPPATH\classes\Controller\admin\Categories.php [ 36 ] in file:line
2013-10-13 13:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 13:53:45 --- CRITICAL: ErrorException [ 1 ]: Call to protected method Model_Category::make_full_url() from context 'Controller_Admin_Categories' ~ APPPATH\classes\Controller\admin\Categories.php [ 36 ] in file:line
2013-10-13 13:53:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 14:05:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\admin\Categories.php [ 18 ] in file:line
2013-10-13 14:05:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 14:07:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\admin\Categories.php [ 32 ] in file:line
2013-10-13 14:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 14:13:17 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\category\v_category_edit.php [ 30 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:30
2013-10-13 14:13:17 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(30): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 30, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:30
2013-10-13 15:29:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\views\admin\category\v_category_edit.php [ 29 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:29
2013-10-13 15:29:55 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 29, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:29
2013-10-13 15:31:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\views\admin\category\v_category_edit.php [ 29 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:29
2013-10-13 15:31:14 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 29, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:29
2013-10-13 15:31:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\views\admin\category\v_category_edit.php [ 29 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:29
2013-10-13 15:31:20 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 29, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:29
2013-10-13 15:31:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\views\admin\category\v_category_add.php [ 29 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:29
2013-10-13 15:31:29 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 29, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:29
2013-10-13 15:32:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\views\admin\category\v_category_add.php [ 29 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:29
2013-10-13 15:32:14 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 29, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:29
2013-10-13 15:32:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\views\admin\category\v_category_add.php [ 29 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:29
2013-10-13 15:32:17 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 29, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:29
2013-10-13 15:32:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\category\v_category_add.php [ 37 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:37
2013-10-13 15:32:23 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 37, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:37
2013-10-13 15:32:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\category\v_category_add.php [ 37 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:37
2013-10-13 15:32:36 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 37, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:37
2013-10-13 15:32:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\admin\category\v_category_add.php [ 37 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:37
2013-10-13 15:32:38 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 37, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:37
2013-10-13 15:33:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_add.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:33:07 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:42:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_add.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:42:03 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:42:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_add.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:42:30 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:42:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_add.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:42:55 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:43:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_add.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:43:46 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_add.php:49
2013-10-13 15:46:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_edit.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:46:18 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:47:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_edit.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:47:03 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:47:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_edit.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:47:31 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:48:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_edit.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:48:21 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:51:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: full_url ~ APPPATH\views\admin\category\v_category_edit.php [ 49 ] in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 15:51:14 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 49, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\category\v_category_edit.php:49
2013-10-13 16:29:46 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:29:46 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('4')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:30:37 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:30:37 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('2')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:30:47 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:30:47 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('0')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:30:57 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:30:57 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('0')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:31:39 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:31:39 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('0')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:31:47 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:31:47 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('1')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:40:08 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:40:08 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('1')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:40:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\Category.php [ 74 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:74
2013-10-13 16:40:48 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(74): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 74, Array)
#1 [internal function]: Model_Category->parent_not_id('1')
#2 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#6 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:74
2013-10-13 16:41:03 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:41:03 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\budvrabote\www\application\classes\Model\Category.php(71): Kohana_ORM->__get('request')
#2 [internal function]: Model_Category->parent_not_id('1')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 16:51:22 --- CRITICAL: ErrorException [ 8 ]: Object of class Validation could not be converted to int ~ APPPATH\classes\Model\Category.php [ 73 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:73
2013-10-13 16:51:22 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(73): Kohana_Core::error_handler(8, 'Object of class...', 'Z:\home\budvrab...', 73, Array)
#1 [internal function]: Model_Category->parent_not_id(Object(Validation), '4')
#2 Z:\home\budvrabote\www\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#5 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#6 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(78): Kohana_ORM->save()
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:73
2013-10-13 22:27:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: settings ~ APPPATH\classes\Controller\Widgets.php [ 11 ] in Z:\home\budvrabote\www\application\classes\Controller\Widgets.php:11
2013-10-13 22:27:17 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\Widgets.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 11, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Widgets->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menuadmin))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\application\classes\Widget.php(83): Kohana_Request->execute()
#7 Z:\home\budvrabote\www\application\classes\Widget.php(37): Widget->render()
#8 Z:\home\budvrabote\www\application\classes\Controller\Admin.php(19): Widget::load('menuadmin')
#9 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\budvrabote\www\application\classes\Controller\Widgets.php:11
2013-10-13 22:51:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:54:34 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:54:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:55:02 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:55:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:56:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:56:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:57:32 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:57:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:58:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:58:33 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 78 ] in file:line
2013-10-13 22:58:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 22:59:25 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 79 ] in file:line
2013-10-13 22:59:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:06:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:06:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:06:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\Model\Category.php [ 72 ] in file:line
2013-10-13 23:06:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:06:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:06:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:06:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:06:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:06:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:06:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:06:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:06:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:07:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:07:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:07:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:07:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:07:44 --- CRITICAL: Kohana_Exception [ 0 ]: The  property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 23:07:44 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('')
#1 Z:\home\budvrabote\www\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('')
#2 Z:\home\budvrabote\www\application\classes\Model\Category.php(72): Kohana_Database_Result->as_array('', '')
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 23:10:06 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 79 ] in file:line
2013-10-13 23:10:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:10:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\classes\Model\Category.php [ 79 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:10:17 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 79, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:10:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_id ~ APPPATH\classes\Model\Category.php [ 79 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:10:35 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\budvrab...', 79, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:10:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Category.php [ 77 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:77
2013-10-13 23:10:42 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\budvrab...', 77, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:77
2013-10-13 23:10:46 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Model\Category.php [ 77 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:77
2013-10-13 23:10:46 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\budvrab...', 77, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:77
2013-10-13 23:10:49 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\classes\Model\Category.php [ 77 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:77
2013-10-13 23:10:49 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\budvrab...', 77, Array)
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:77
2013-10-13 23:10:55 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Model\Category.php [ 79 ] in file:line
2013-10-13 23:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:15:06 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 23:15:06 --- DEBUG: #0 Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\budvrabote\www\modules\database\classes\Kohana\Database\Result.php(157): Kohana_ORM->__get('name')
#2 Z:\home\budvrabote\www\application\classes\Model\Category.php(72): Kohana_Database_Result->as_array('name', 'id')
#3 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#4 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\budvrabote\www\modules\orm\classes\Kohana\ORM.php:603
2013-10-13 23:24:28 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:81
2013-10-13 23:24:28 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(81): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:81
2013-10-13 23:29:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Model\Category.php [ 76 ] in file:line
2013-10-13 23:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:42:25 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:42:25 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:42:42 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:42:42 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:44:14 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:44:14 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:45:03 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:45:03 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:45:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:45:39 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->find()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:47:25 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:47:25 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:55:20 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:55:20 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:56:26 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:56:26 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:56:37 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update category model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:56:37 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Model\Category.php(79): Kohana_ORM->update()
#1 Z:\home\budvrabote\www\application\classes\Controller\admin\Categories.php(79): Model_Category->change_url(5)
#2 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Categories->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categories))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\budvrabote\www\application\classes\Model\Category.php:79
2013-10-13 23:58:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Model\Category.php [ 73 ] in file:line
2013-10-13 23:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-13 23:59:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Model\Category.php [ 79 ] in file:line
2013-10-13 23:59:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line