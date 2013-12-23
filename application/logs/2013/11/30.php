<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-30 00:21:26 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:21:26 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:26:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: settings ~ APPPATH\classes\Controller\Admin\Gallery.php [ 114 ] in Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php:114
2013-11-30 00:26:22 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(114): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 114, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php:114
2013-11-30 00:29:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: settings ~ APPPATH\views\admin\gallery\v_gallery_images.php [ 6 ] in Z:\home\cms\www\application\views\admin\gallery\v_gallery_images.php:6
2013-11-30 00:29:39 --- DEBUG: #0 Z:\home\cms\www\application\views\admin\gallery\v_gallery_images.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 6, Array)
#1 Z:\home\cms\www\system\classes\Kohana\View.php(61): include('Z:\home\cms\www...')
#2 Z:\home\cms\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\cms\www...', Array)
#3 Z:\home\cms\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\cms\www\application\views\admin\template.php(42): Kohana_View->__toString()
#5 Z:\home\cms\www\system\classes\Kohana\View.php(61): include('Z:\home\cms\www...')
#6 Z:\home\cms\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\cms\www...', Array)
#7 Z:\home\cms\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\application\views\admin\gallery\v_gallery_images.php:6
2013-11-30 00:30:42 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:42 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:30:43 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-30 00:38:58 --- CRITICAL: ErrorException [ 2 ]: unlink(public/uploads/gallery/) [function.unlink]: Permission denied ~ APPPATH\classes\Controller\Admin\Gallery.php [ 127 ] in file:line
2013-11-30 00:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(public/u...', 'Z:\home\cms\www...', 127, Array)
#1 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(127): unlink('public/uploads/...')
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-30 00:39:50 --- CRITICAL: ErrorException [ 2 ]: unlink(/public/uploads/gallery/) [function.unlink]: No such file or directory ~ APPPATH\classes\Controller\Admin\Gallery.php [ 127 ] in file:line
2013-11-30 00:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/public/...', 'Z:\home\cms\www...', 127, Array)
#1 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(127): unlink('/public/uploads...')
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-30 00:40:27 --- CRITICAL: ErrorException [ 2 ]: unlink(/public/uploads/gallery/3679028.jpg) [function.unlink]: No such file or directory ~ APPPATH\classes\Controller\Admin\Gallery.php [ 126 ] in file:line
2013-11-30 00:40:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/public/...', 'Z:\home\cms\www...', 126, Array)
#1 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(126): unlink('/public/uploads...')
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-30 00:41:33 --- CRITICAL: ErrorException [ 2 ]: unlink(/public/uploads/gallery/) [function.unlink]: No such file or directory ~ APPPATH\classes\Controller\Admin\Gallery.php [ 127 ] in file:line
2013-11-30 00:41:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/public/...', 'Z:\home\cms\www...', 127, Array)
#1 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(127): unlink('/public/uploads...')
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-30 00:47:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: img_small_dir ~ APPPATH\views\admin\gallery\v_gallery_images.php [ 7 ] in Z:\home\cms\www\application\views\admin\gallery\v_gallery_images.php:7
2013-11-30 00:47:30 --- DEBUG: #0 Z:\home\cms\www\application\views\admin\gallery\v_gallery_images.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 7, Array)
#1 Z:\home\cms\www\system\classes\Kohana\View.php(61): include('Z:\home\cms\www...')
#2 Z:\home\cms\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\cms\www...', Array)
#3 Z:\home\cms\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\cms\www\application\views\admin\template.php(42): Kohana_View->__toString()
#5 Z:\home\cms\www\system\classes\Kohana\View.php(61): include('Z:\home\cms\www...')
#6 Z:\home\cms\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\cms\www...', Array)
#7 Z:\home\cms\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\application\views\admin\gallery\v_gallery_images.php:7
2013-11-30 00:56:56 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\views\admin\gallery\v_gallery_edit_image.php [ 19 ] in file:line
2013-11-30 00:56:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line