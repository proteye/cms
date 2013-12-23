<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-16 20:14:17 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 44 ] in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 20:14:17 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 20:19:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\admin\article\v_article_index.php [ 1 ] in Z:\home\budvrabote\www\application\views\admin\article\v_article_index.php:1
2013-11-16 20:19:43 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\article\v_article_index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 1, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\admin\article\v_article_index.php:1
2013-11-16 20:21:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\Admin\Articles.php [ 21 ] in Z:\home\budvrabote\www\application\classes\Controller\Admin\Articles.php:21
2013-11-16 20:21:21 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\Admin\Articles.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 21, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\Admin\Articles.php:21
2013-11-16 21:47:46 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 44 ] in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 21:47:46 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 21:49:15 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 44 ] in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 21:49:15 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 22:13:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 44 ] in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-11-16 22:13:49 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84