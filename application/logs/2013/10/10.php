<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-10 01:09:48 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-10 01:09:48 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 Z:\home\kohana\www\application\classes\Model\Article.php(28): Kohana_Database_Query->execute()
#3 Z:\home\kohana\www\application\classes\Controller\Page.php(15): Model_Article->getAll()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-10 01:20:10 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-10 01:20:10 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 Z:\home\kohana\www\application\classes\Model\Article.php(19): Kohana_Database_Query->execute()
#3 Z:\home\kohana\www\application\classes\Controller\Page.php(15): Model_Article->getAll()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-10 01:20:11 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171
2013-10-10 01:20:11 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 Z:\home\kohana\www\application\classes\Model\Article.php(19): Kohana_Database_Query->execute()
#3 Z:\home\kohana\www\application\classes\Controller\Page.php(15): Model_Article->getAll()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:171