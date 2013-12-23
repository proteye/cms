<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-24 14:09:37 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-24 14:09:37 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-24 15:15:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\gallery\v_gallery_index.php [ 12 ] in Z:\home\cms\www\application\views\admin\gallery\v_gallery_index.php:12
2013-11-24 15:15:53 --- DEBUG: #0 Z:\home\cms\www\application\views\admin\gallery\v_gallery_index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 12, Array)
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
#14 {main} in Z:\home\cms\www\application\views\admin\gallery\v_gallery_index.php:12
2013-11-24 16:24:12 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery/images/1 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:24:12 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:31:35 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Gallery as array ~ APPPATH\views\admin\gallery\v_gallery_index.php [ 4 ] in file:line
2013-11-24 16:31:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 16:32:49 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery/images/1 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:32:49 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:32:59 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery/edit/1 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:32:59 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:42:47 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/gallery/images/1 was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 16:42:47 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 17:53:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Gallery::Template() ~ APPPATH\classes\Controller\Admin\Gallery.php [ 103 ] in file:line
2013-11-24 17:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 17:54:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Gallery::Template() ~ APPPATH\classes\Controller\Admin\Gallery.php [ 103 ] in file:line
2013-11-24 17:54:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 18:03:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Gallery::Template() ~ APPPATH\classes\Controller\Admin\Gallery.php [ 103 ] in file:line
2013-11-24 18:03:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 18:15:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: gallery ~ APPPATH\views\admin\gallery\v_gallery_upload.php [ 6 ] in Z:\home\cms\www\application\views\admin\gallery\v_gallery_upload.php:6
2013-11-24 18:15:16 --- DEBUG: #0 Z:\home\cms\www\application\views\admin\gallery\v_gallery_upload.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 6, Array)
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
#14 {main} in Z:\home\cms\www\application\views\admin\gallery\v_gallery_upload.php:6
2013-11-24 18:35:05 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Gallery as array ~ APPPATH\views\admin\gallery\v_gallery_upload.php [ 14 ] in file:line
2013-11-24 18:35:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 18:52:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL ajax/image was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 18:52:20 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 18:52:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL ajax/image was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 18:52:20 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 18:52:20 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL ajax/image was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 18:52:20 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:80
2013-11-24 20:35:44 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Gallery as array ~ APPPATH\views\admin\gallery\v_gallery_upload.php [ 14 ] in file:line
2013-11-24 20:35:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 20:36:13 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Gallery as array ~ APPPATH\views\admin\gallery\v_gallery_upload.php [ 20 ] in file:line
2013-11-24 20:36:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:08:05 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_Image::delete() should be compatible with that of Kohana_ORM::delete() ~ APPPATH\classes\Model\Image.php [ 179 ] in Z:\home\cms\www\system\classes\Kohana\Core.php:511
2013-11-24 21:08:05 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', 'Z:\home\cms\www...', 179, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(46): spl_autoload_call('Model_Image')
#4 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(659): Kohana_ORM::factory('Image')
#5 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('images')
#6 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(115): Kohana_ORM->__get('images')
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\cms\www\system\classes\Kohana\Core.php:511
2013-11-24 21:10:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:10:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:10:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:18:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:18:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:21:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:21:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:21:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:21:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:23:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:23:06 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:23:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:23:06 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Chrysanthemum.j...', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:24:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:24:49 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Chrysanthemum.j...', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:24:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:24:49 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:25:16 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:25:16 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:26:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:26:43 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:26:58 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:26:58 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:04 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:04 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:40 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:40 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:43 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:43 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:43 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:59 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:27:59 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Lighthouse.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:30:12 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:30:12 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Kohana_ORM->save()
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Lighthouse.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:36:56 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:36:56 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(118): Kohana_ORM->save()
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:37:46 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:37:46 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(118): Kohana_ORM->create()
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:38:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Admin\Gallery.php [ 122 ] in file:line
2013-11-24 21:38:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:38:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Admin\Gallery.php [ 122 ] in file:line
2013-11-24 21:38:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:39:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Admin\Gallery.php [ 123 ] in file:line
2013-11-24 21:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:39:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Admin\Gallery.php [ 123 ] in file:line
2013-11-24 21:39:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:39:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Admin\Gallery.php [ 124 ] in file:line
2013-11-24 21:39:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:39:32 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:39:32 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 Z:\home\cms\www\application\classes\Controller\Admin\Gallery.php(122): Kohana_ORM->save()
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Gallery->action_images()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Gallery))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:1302
2013-11-24 21:39:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\Admin\Gallery.php [ 125 ] in file:line
2013-11-24 21:39:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:40:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_STRING or T_NAMESPACE or T_NS_SEPARATOR ~ APPPATH\classes\Controller\Admin\Gallery.php [ 125 ] in file:line
2013-11-24 21:40:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:44:50 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 106 ] in file:line
2013-11-24 21:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 106, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(106): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Model_Image->move_upload_base64('data:image/jpeg...', '8960969.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:44:50 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 106 ] in file:line
2013-11-24 21:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 106, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(106): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Model_Image->move_upload_base64('data:image/jpeg...', '1148088.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Chrysanthemum.j...', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:44:50 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 106 ] in file:line
2013-11-24 21:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 106, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(106): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Model_Image->move_upload_base64('data:image/jpeg...', '3833603.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Desert.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:44:50 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 106 ] in file:line
2013-11-24 21:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 106, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(106): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Model_Image->move_upload_base64('data:image/jpeg...', '5298786.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Chrysanthemum.j...', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:45:04 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 106 ] in file:line
2013-11-24 21:45:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 106, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(106): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(61): Model_Image->move_upload_base64('data:image/jpeg...', '3146510.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Penguins.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:47:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:47:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:47:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:47:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:48:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:48:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:49:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:49:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:50:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:51:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:53:49 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 105 ] in file:line
2013-11-24 21:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 105, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(105): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(60): Model_Image->move_upload_base64('data:image/jpeg...', '7349616.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Model_Image->upload_base64('Penguins.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:54:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Ajax.php [ 48 ] in Z:\home\cms\www\application\classes\Controller\Ajax.php:48
2013-11-24 21:54:06 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\Ajax.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms\www...', 48, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\Ajax.php:48
2013-11-24 21:55:28 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 105 ] in file:line
2013-11-24 21:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 105, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(105): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(60): Model_Image->move_upload_base64('data:image/jpeg...', '7409767.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(49): Model_Image->upload_base64('Penguins.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:55:37 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 105 ] in file:line
2013-11-24 21:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 105, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(105): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(60): Model_Image->move_upload_base64('data:image/jpeg...', '7261630.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(49): Model_Image->upload_base64('Koala.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:56:26 --- CRITICAL: ErrorException [ 8 ]: Constant IMG_DIR already defined ~ APPPATH\classes\Model\Image.php [ 105 ] in file:line
2013-11-24 21:56:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Constant IMG_DI...', 'Z:\home\cms\www...', 105, Array)
#1 Z:\home\cms\www\application\classes\Model\Image.php(105): define('IMG_DIR', 'public/uploads/...')
#2 Z:\home\cms\www\application\classes\Model\Image.php(60): Model_Image->move_upload_base64('data:image/jpeg...', '3687722.jpg')
#3 Z:\home\cms\www\application\classes\Controller\Ajax.php(49): Model_Image->upload_base64('Koala.jpg', 'data:image/jpeg...')
#4 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-24 21:58:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 21:58:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Gallery_Image' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-24 21:58:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-24 22:00:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: gallery_id ~ APPPATH\classes\Controller\Ajax.php [ 50 ] in Z:\home\cms\www\application\classes\Controller\Ajax.php:50
2013-11-24 22:00:37 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\Ajax.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms\www...', 50, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\Ajax.php:50