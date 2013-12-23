<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-16 08:59:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'budvrabote.categories' doesn't exist [ SHOW FULL COLUMNS FROM `categories` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-16 08:59:02 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('categories')
#2 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\cms\www\application\classes\Controller\widgets\MenuMain.php(15): Kohana_ORM::factory('category')
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MenuMain->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MenuMain))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\application\classes\Widget.php(83): Kohana_Request->execute()
#13 Z:\home\cms\www\application\classes\Widget.php(37): Widget->render()
#14 Z:\home\cms\www\application\classes\Controller\Main.php(14): Widget::load('menumain')
#15 Z:\home\cms\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#16 [internal function]: Kohana_Controller->execute()
#17 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#18 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#21 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-16 08:59:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'budvrabote.categories' doesn't exist [ SHOW FULL COLUMNS FROM `categories` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\cms\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-16 08:59:02 --- DEBUG: #0 Z:\home\cms\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('categories')
#2 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\cms\www\application\classes\Controller\main\Index.php(12): Kohana_ORM::factory('category')
#7 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\cms\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-10-16 08:59:42 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL skype was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 08:59:42 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 10:17:07 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Article as array ~ APPPATH\classes\Controller\admin\Articles.php [ 21 ] in file:line
2013-10-16 10:17:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-16 10:17:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\views\admin\article\v_article_index.php [ 19 ] in Z:\home\cms\www\application\views\admin\article\v_article_index.php:19
2013-10-16 10:17:49 --- DEBUG: #0 Z:\home\cms\www\application\views\admin\article\v_article_index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms\www...', 19, Array)
#1 Z:\home\cms\www\system\classes\Kohana\View.php(61): include('Z:\home\cms\www...')
#2 Z:\home\cms\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\cms\www...', Array)
#3 Z:\home\cms\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\cms\www\application\views\admin\template.php(41): Kohana_View->__toString()
#5 Z:\home\cms\www\system\classes\Kohana\View.php(61): include('Z:\home\cms\www...')
#6 Z:\home\cms\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\cms\www...', Array)
#7 Z:\home\cms\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\cms\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#11 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\cms\www\application\views\admin\article\v_article_index.php:19
2013-10-16 10:33:08 --- CRITICAL: Kohana_Exception [ 0 ]: The category_title property does not exist in the Model_Article class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-16 10:33:08 --- DEBUG: #0 Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('category_title', '???????????????...')
#1 Z:\home\cms\www\application\classes\Controller\admin\Articles.php(21): Kohana_ORM->__set('category_title', '???????????????...')
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\cms\www\modules\orm\classes\Kohana\ORM.php:702
2013-10-16 11:10:29 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL skype was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 11:10:29 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 11:18:09 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL skype was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 11:18:09 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 11:18:47 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 11:18:47 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 11:24:39 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Страница не найдена ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:24:39 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:15 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Страница не найдена ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:15 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:27 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:27 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:27 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:27 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:32 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:25:32 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:26:00 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:26:00 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:26:33 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:26:33 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:29:46 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:29:46 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:29:59 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:29:59 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 11:31:40 --- CRITICAL: View_Exception [ 0 ]: The requested view main/v_category_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\cms\www\system\classes\Kohana\View.php:137
2013-10-16 11:31:40 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('main/v_category...')
#1 Z:\home\cms\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('main/v_category...', NULL)
#2 Z:\home\cms\www\application\classes\Controller\main\Index.php(28): Kohana_View::factory('main/v_category...')
#3 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#6 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\cms\www\system\classes\Kohana\View.php:137
2013-10-16 14:56:57 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 19 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 14:56:57 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\application\classes\Controller\main\Index.php(29): Kohana_Request->execute()
#6 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#9 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 14:56:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\main\Index.php [ 40 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 14:56:57 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 40, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 14:57:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\main\Index.php [ 40 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 14:57:30 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 40, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 15:02:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH\classes\Controller\main\Index.php [ 28 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:28
2013-10-16 15:02:17 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 28, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:28
2013-10-16 15:02:40 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in Z:\home\cms\www\application\classes\Controller\main\Index.php on line 28 and defined ~ SYSPATH\classes\Kohana\Controller.php [ 43 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:43
2013-10-16 15:02:40 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\cms\www...', 43, Array)
#1 Z:\home\cms\www\application\classes\Controller\main\Index.php(28): Kohana_Controller->__construct()
#2 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#5 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:43
2013-10-16 15:03:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\main\Index.php [ 40 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 15:03:17 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 40, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 15:03:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\main\Index.php [ 36 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:36
2013-10-16 15:03:29 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 36, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:36
2013-10-16 15:18:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\main\Index.php [ 34 ] in file:line
2013-10-16 15:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-16 15:32:00 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 23 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:32:00 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:32:44 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\main\category\v_category_index.php [ 4 ] in file:line
2013-10-16 15:32:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-16 15:33:56 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 23 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:33:56 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:34:59 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 24 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:34:59 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:35:36 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skype/skype/7 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request.php:975
2013-10-16 15:35:36 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\cms\www\system\classes\Kohana\Request.php:975
2013-10-16 15:36:03 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skype/skype/7 ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\cms\www\system\classes\Kohana\Request.php:975
2013-10-16 15:36:03 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\cms\www\system\classes\Kohana\Request.php:975
2013-10-16 15:40:36 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 24 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 15:40:36 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 16:13:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 35 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:04 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 35, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 35 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:32 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 35, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 35 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:38 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 35, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 35 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:40 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 35, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 35 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:13:56 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 35, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:35
2013-10-16 16:16:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 36 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:36
2013-10-16 16:16:52 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 36, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:36
2013-10-16 16:16:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 36 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:36
2013-10-16 16:16:59 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 36, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:36
2013-10-16 16:20:30 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\main\Index.php [ 13 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:13
2013-10-16 16:20:30 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\cms\www...', 13, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:13
2013-10-16 16:20:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 38 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:38
2013-10-16 16:20:45 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 38, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:38
2013-10-16 16:20:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\main\Index.php [ 13 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:13
2013-10-16 16:20:56 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\cms\www...', 13, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:13
2013-10-16 16:21:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Controller\main\Index.php [ 13 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:13
2013-10-16 16:21:01 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\cms\www...', 13, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:13
2013-10-16 16:21:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:21 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:27 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:30 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:36 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:38 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:41 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:43 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:21:53 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:22:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:22:10 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:23:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:23:16 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:23:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:23:34 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:24:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 37 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:37
2013-10-16 16:24:06 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 37, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:37
2013-10-16 16:24:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 37 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:37
2013-10-16 16:24:41 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 37, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:37
2013-10-16 16:25:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:25:40 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:25:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\classes\Controller\main\Index.php [ 39 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:25:56 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 39, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:39
2013-10-16 16:26:51 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 28 ] in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 16:26:51 --- DEBUG: #0 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\cms\www\system\classes\Kohana\Controller.php:84
2013-10-16 16:32:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: article_id ~ APPPATH\classes\Controller\main\Index.php [ 40 ] in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 16:32:21 --- DEBUG: #0 Z:\home\cms\www\application\classes\Controller\main\Index.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms\www...', 40, Array)
#1 Z:\home\cms\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\cms\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#4 Z:\home\cms\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\cms\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\cms\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\cms\www\application\classes\Controller\main\Index.php:40
2013-10-16 20:51:31 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 30 ] in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-10-16 20:51:31 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-10-16 21:10:37 --- CRITICAL: HTTP_Exception_404 [ 404 ]:  ~ APPPATH\classes\Controller\main\Index.php [ 30 ] in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-10-16 21:10:37 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Main_Index->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Controller.php:84
2013-10-16 21:34:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: select ~ APPPATH\classes\Controller\widgets\MenuMain.php [ 40 ] in Z:\home\budvrabote\www\application\classes\Controller\widgets\MenuMain.php:40
2013-10-16 21:34:32 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\widgets\MenuMain.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 40, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Widgets_MenuMain->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_MenuMain))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\application\classes\Widget.php(83): Kohana_Request->execute()
#7 Z:\home\budvrabote\www\application\classes\Widget.php(37): Widget->render()
#8 Z:\home\budvrabote\www\application\classes\Controller\Main.php(14): Widget::load('menumain')
#9 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\budvrabote\www\application\classes\Controller\widgets\MenuMain.php:40
2013-10-16 23:24:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\classes\Controller\admin\Articles.php [ 27 ] in Z:\home\budvrabote\www\application\classes\Controller\admin\Articles.php:27
2013-10-16 23:24:16 --- DEBUG: #0 Z:\home\budvrabote\www\application\classes\Controller\admin\Articles.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\budvrab...', 27, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Articles->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#4 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\budvrabote\www\application\classes\Controller\admin\Articles.php:27
2013-10-16 23:30:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\article\v_article_index.php [ 14 ] in Z:\home\budvrabote\www\application\views\admin\article\v_article_index.php:14
2013-10-16 23:30:23 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\admin\article\v_article_index.php(14): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\budvrab...', 14, Array)
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
#14 {main} in Z:\home\budvrabote\www\application\views\admin\article\v_article_index.php:14
2013-10-16 23:33:59 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/skype was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 23:33:59 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 23:34:26 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL admin/doctrines was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 23:34:26 --- DEBUG: #0 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-10-16 23:56:36 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main\category\v_category_index.php [ 4 ] in Z:\home\budvrabote\www\application\views\main\category\v_category_index.php:4
2013-10-16 23:56:36 --- DEBUG: #0 Z:\home\budvrabote\www\application\views\main\category\v_category_index.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\budvrab...', 4, Array)
#1 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#2 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#3 Z:\home\budvrabote\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\budvrabote\www\application\views\main\template.php(43): Kohana_View->__toString()
#5 Z:\home\budvrabote\www\system\classes\Kohana\View.php(61): include('Z:\home\budvrab...')
#6 Z:\home\budvrabote\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\budvrab...', Array)
#7 Z:\home\budvrabote\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\budvrabote\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main_Index))
#11 Z:\home\budvrabote\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\budvrabote\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\budvrabote\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\budvrabote\www\application\views\main\category\v_category_index.php:4