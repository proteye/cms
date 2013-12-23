<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-28 22:27:24 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-28 22:27:24 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-28 22:27:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: gallery_id ~ APPPATH\classes\Controller\Ajax.php [ 46 ] in Z:\home\cms\www\application\classes\Controller\Ajax.php:46
2013-11-28 22:27:44 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\Ajax.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms\www...', 46, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\Ajax.php:46
2013-11-28 22:40:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: gallery_id ~ APPPATH\classes\Controller\Ajax.php [ 46 ] in Z:\home\cms\www\application\classes\Controller\Ajax.php:46
2013-11-28 22:40:39 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\Ajax.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms\www...', 46, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\Ajax.php:46
2013-11-28 22:42:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: gallery_id ~ APPPATH\classes\Controller\Ajax.php [ 46 ] in Z:\home\cms\www\application\classes\Controller\Ajax.php:46
2013-11-28 22:42:20 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\Ajax.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms\www...', 46, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\Ajax.php:46
2013-11-28 22:55:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'gallery_id' [ INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES ('1', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:55:50 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\cms\www\application\classes\Controller\Ajax.php(51): Kohana_ORM->add('images', Object(Model_Image))
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:55:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'gallery_id' [ INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES ('1', '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:55:50 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\cms\www\application\classes\Controller\Ajax.php(51): Kohana_ORM->add('images', Object(Model_Image))
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:55:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'gallery_id' [ INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES ('1', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:55:50 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\cms\www\application\classes\Controller\Ajax.php(51): Kohana_ORM->add('images', Object(Model_Image))
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:56:05 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Image as array ~ APPPATH\views\admin\gallery\v_gallery_images.php [ 11 ] in file:line
2013-11-28 22:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-28 22:57:23 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\Main\Index.php [ 40 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-28 22:57:23 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-11-28 22:58:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'gallery_id' [ INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES ('1', '5') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:58:13 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\cms\www\application\classes\Controller\Ajax.php(51): Kohana_ORM->add('images', Object(Model_Image))
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:58:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'gallery_id' [ INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES ('1', '6') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:58:13 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\cms\www\application\classes\Controller\Ajax.php(51): Kohana_ORM->add('images', Object(Model_Image))
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:58:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'gallery_id' [ INSERT INTO `gallery_images` (`gallery_id`, `image_id`) VALUES ('1', '7') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-28 22:58:13 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ga...', false, Array)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\cms\www\application\classes\Controller\Ajax.php(51): Kohana_ORM->add('images', Object(Model_Image))
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_image()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\Query.php:251