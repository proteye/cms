<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-23 15:28:05 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-23 15:28:05 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-23 15:47:46 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-11-23 15:47:46 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79