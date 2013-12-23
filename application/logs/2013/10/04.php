<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-04 16:03:12 --- CRITICAL: View_Exception [ 0 ]: The requested view /admin/show could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-04 16:03:12 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/admin/show')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/admin/show', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\Main.php(7): Kohana_View::factory('/admin/show')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-04 16:04:19 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\admin\Main.php [ 8 ] in Z:\home\kohana\www\application\classes\Controller\admin\Main.php:8
2013-10-04 16:04:19 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\Main.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\kohana\...', 8, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\Main.php:8
2013-10-04 16:24:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\admin\index.php [ 3 ] in Z:\home\kohana\www\application\views\admin\index.php:3
2013-10-04 16:24:16 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\application\classes\Controller\admin\Main.php(10): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\admin\index.php:3
2013-10-04 16:27:04 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/indexa could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-04 16:27:04 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/indexa')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/indexa', Array)
#2 Z:\home\kohana\www\application\classes\Controller\admin\Main.php(10): Kohana_View::factory('admin/indexa', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-04 16:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\admin\index.php [ 3 ] in Z:\home\kohana\www\application\views\admin\index.php:3
2013-10-04 16:29:51 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\application\classes\Controller\admin\Main.php(9): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\admin\index.php:3