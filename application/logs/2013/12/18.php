<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-18 23:28:19 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-12-18 23:28:19 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-12-18 23:31:48 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-12-18 23:31:48 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84