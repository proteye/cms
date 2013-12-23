<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 23:13:04 --- CRITICAL: View_Exception [ 0 ]: The requested view main/v_rblock could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\budvrabote\www\system\classes\Kohana\View.php:137
2013-11-08 23:13:04 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main/v_rblock')
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main/v_rblock', NULL)
#2 Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php(56): Kohana_View::factory('main/v_rblock')
#3 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#6 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\budvrabote\www\system\classes\Kohana\View.php:137
2013-11-08 23:15:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rblock ~ APPPATH\classes\Controller\Main\Index.php [ 108 ] in Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php:108
2013-11-08 23:15:56 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 108, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php:108
2013-11-08 23:18:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rblock ~ APPPATH\classes\Controller\Main\Index.php [ 109 ] in Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php:109
2013-11-08 23:18:05 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php(109): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 109, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\Main\Index.php:109