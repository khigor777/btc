<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-01 05:42:34 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Parse\Curl.php [ 45 ] in file:line
2014-06-01 05:42:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-01 06:23:08 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `status` = 2 AND ( ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:23:08 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:23:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `status` = 2 AND () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:23:51 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:24:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `status` = 2 AND (`1` = 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:24:18 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:24:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `status` = 2 AND (`1` = 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:24:33 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:24:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `status` = 2 AND (`1` = 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:24:42 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:25:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `status` = 2 AND `1` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:25:25 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:26:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 46 ] in file:line
2014-06-01 06:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-01 06:26:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `1` = '1' AND `status` = 2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:26:10 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:26:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT COUNT(`param`.`id`) AS `records_found` FROM `params` AS `param` WHERE `1` = 1 AND `status` = 2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 06:26:27 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`p...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(46): Kohana_ORM->count_all()
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-01 07:45:15 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Param could not be converted to int ~ MODPATH\pagination\classes\kohana\pagination.php [ 187 ] in file:line
2014-06-01 07:45:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Object of class...', 'C:\wamp\www\seo...', 187, Array)
#1 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(187): max(0, Object(Model_Param))
#2 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(102): Kohana_Pagination->setup(Array)
#3 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(73): Kohana_Pagination->__construct(Array, NULL)
#4 C:\wamp\www\seo\application\classes\Controller\Main.php(51): Kohana_Pagination::factory(Array)
#5 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#6 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-06-01 07:45:44 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Param could not be converted to int ~ MODPATH\pagination\classes\kohana\pagination.php [ 187 ] in file:line
2014-06-01 07:45:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Object of class...', 'C:\wamp\www\seo...', 187, Array)
#1 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(187): max(0, Object(Model_Param))
#2 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(102): Kohana_Pagination->setup(Array)
#3 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(73): Kohana_Pagination->__construct(Array, NULL)
#4 C:\wamp\www\seo\application\classes\Controller\Main.php(51): Kohana_Pagination::factory(Array)
#5 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#6 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-06-01 07:46:33 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Param could not be converted to int ~ MODPATH\pagination\classes\kohana\pagination.php [ 187 ] in file:line
2014-06-01 07:46:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Object of class...', 'C:\wamp\www\seo...', 187, Array)
#1 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(187): max(0, Object(Model_Param))
#2 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(102): Kohana_Pagination->setup(Array)
#3 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(73): Kohana_Pagination->__construct(Array, NULL)
#4 C:\wamp\www\seo\application\classes\Controller\Main.php(51): Kohana_Pagination::factory(Array)
#5 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2)
#6 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2014-06-01 09:01:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\widgets\in_table.php [ 13 ] in C:\wamp\www\seo\application\views\widgets\in_table.php:13
2014-06-01 09:01:09 --- DEBUG: #0 C:\wamp\www\seo\application\views\widgets\in_table.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 13, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\View.php(61): include('C:\wamp\www\seo...')
#2 C:\wamp\www\seo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\seo...', Array)
#3 C:\wamp\www\seo\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\seo\application\views\base\in_base.php(76): Kohana_View->__toString()
#5 C:\wamp\www\seo\system\classes\Kohana\View.php(61): include('C:\wamp\www\seo...')
#6 C:\wamp\www\seo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\seo...', Array)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\seo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\seo\application\views\widgets\in_table.php:13
2014-06-01 09:01:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\widgets\in_table.php [ 13 ] in C:\wamp\www\seo\application\views\widgets\in_table.php:13
2014-06-01 09:01:12 --- DEBUG: #0 C:\wamp\www\seo\application\views\widgets\in_table.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 13, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\View.php(61): include('C:\wamp\www\seo...')
#2 C:\wamp\www\seo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\seo...', Array)
#3 C:\wamp\www\seo\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\seo\application\views\base\in_base.php(76): Kohana_View->__toString()
#5 C:\wamp\www\seo\system\classes\Kohana\View.php(61): include('C:\wamp\www\seo...')
#6 C:\wamp\www\seo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\seo...', Array)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\seo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\seo\application\views\widgets\in_table.php:13
2014-06-01 11:56:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: urls ~ APPPATH\classes\Controller\Link.php [ 36 ] in C:\wamp\www\seo\application\classes\Controller\Link.php:36
2014-06-01 11:56:37 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Link.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 36, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Link.php(21): Controller_Link->addDefault()
#2 C:\wamp\www\seo\application\classes\Controller\Link.php(16): Controller_Link->addAllData()
#3 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Link->action_default()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Link))
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\seo\application\classes\Controller\Link.php:36
2014-06-01 12:51:30 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Parse\Curl.php [ 45 ] in file:line
2014-06-01 12:51:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line