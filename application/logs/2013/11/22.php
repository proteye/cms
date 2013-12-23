<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-22 21:31:53 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-22 21:31:53 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-22 21:57:53 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-22 21:57:53 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-22 22:01:01 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\cms\www\system\classes\Kohana\View.php:137
2013-11-22 22:01:01 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\cms\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\cms\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\cms\www\application\classes\Controller\Base.php(12): Kohana_Controller_Template->before()
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\system\classes\Kohana\View.php:137
2013-11-22 22:24:21 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles/qwe was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-22 22:24:21 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-22 22:24:21 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles/qwe was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-22 22:24:21 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-22 22:24:23 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles/qwe was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-22 22:24:23 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-22 22:24:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-22 22:24:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84