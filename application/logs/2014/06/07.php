<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-07 09:15:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Helper_Update::addAllDataByUrl(), called in C:\wamp\www\seo\application\classes\Controller\Main.php on line 11 and defined ~ APPPATH\classes\Helper\Update.php [ 21 ] in C:\wamp\www\seo\application\classes\Helper\Update.php:21
2014-06-07 09:15:26 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Helper\Update.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\seo...', 21, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Helper_Update->addAllDataByUrl('2040cars.com')
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\application\classes\Helper\Update.php:21
2014-06-07 09:17:01 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'hash_url' [ INSERT INTO `params` (`domain_create`, `domain_expires`) VALUES ('0', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:01 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\seo\application\classes\Helper\Update.php(62): Kohana_ORM->save()
#4 C:\wamp\www\seo\application\classes\Helper\Update.php(54): Helper_Update->updateInsert(Object(Parse_Domain), Array)
#5 C:\wamp\www\seo\application\classes\Helper\Update.php(23): Helper_Update->addData(Object(Parse_Domain), '2040cars.com')
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Helper_Update->addAllDataByUrl('2040cars.com', 0)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:17 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'hash_url' [ INSERT INTO `params` (`pr`, `fake_pr`) VALUES (9999999999.000000, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:17 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\seo\application\classes\Helper\Update.php(62): Kohana_ORM->save()
#4 C:\wamp\www\seo\application\classes\Helper\Update.php(54): Helper_Update->updateInsert(Object(Parse_Pr), Array)
#5 C:\wamp\www\seo\application\classes\Helper\Update.php(24): Helper_Update->addData(Object(Parse_Pr), '2040cars.com')
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Helper_Update->addAllDataByUrl('2040cars.com', 0)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:24 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'hash_url' [ INSERT INTO `params` (`pr`, `fake_pr`) VALUES (9999999999.000000, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:24 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\seo\application\classes\Helper\Update.php(62): Kohana_ORM->save()
#4 C:\wamp\www\seo\application\classes\Helper\Update.php(54): Helper_Update->updateInsert(Object(Parse_Pr), Array)
#5 C:\wamp\www\seo\application\classes\Helper\Update.php(24): Helper_Update->addData(Object(Parse_Pr), '2040cars.com')
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Helper_Update->addAllDataByUrl('2040cars.com', 0)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:28 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'hash_url' [ INSERT INTO `params` (`pr`, `fake_pr`) VALUES (9999999999.000000, 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 09:17:28 --- DEBUG: #0 C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pa...', false, Array)
#1 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\wamp\www\seo\application\classes\Helper\Update.php(62): Kohana_ORM->save()
#4 C:\wamp\www\seo\application\classes\Helper\Update.php(54): Helper_Update->updateInsert(Object(Parse_Pr), Array)
#5 C:\wamp\www\seo\application\classes\Helper\Update.php(24): Helper_Update->addData(Object(Parse_Pr), '2040cars.com')
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Helper_Update->addAllDataByUrl('2040cars.com', 0)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\seo\modules\database\classes\Kohana\Database\Query.php:251
2014-06-07 10:03:39 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant CACHE_DIR - assumed 'CACHE_DIR' ~ APPPATH\classes\Controller\Main.php [ 12 ] in C:\wamp\www\seo\application\classes\Controller\Main.php:12
2014-06-07 10:03:39 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Main.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\seo...', 12, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Main.php:12
2014-06-07 10:04:52 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant CACHE_DIR - assumed 'CACHE_DIR' ~ APPPATH\classes\Controller\Main.php [ 12 ] in C:\wamp\www\seo\application\classes\Controller\Main.php:12
2014-06-07 10:04:52 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Main.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\seo...', 12, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Main.php:12
2014-06-07 10:08:45 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant CACHE_DIR - assumed 'CACHE_DIR' ~ APPPATH\vendor\Pr\PageRank.php [ 55 ] in C:\wamp\www\seo\application\vendor\Pr\PageRank.php:55
2014-06-07 10:08:45 --- DEBUG: #0 C:\wamp\www\seo\application\vendor\Pr\PageRank.php(55): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\seo...', 55, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Main.php(12): GooglePageRank->GooglePageRank('2040cars.com')
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\application\vendor\Pr\PageRank.php:55
2014-06-07 10:10:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant CACHE_DIR - assumed 'CACHE_DIR' ~ APPPATH\vendor\Pr\Cacher.php [ 23 ] in C:\wamp\www\seo\application\vendor\Pr\Cacher.php:23
2014-06-07 10:10:32 --- DEBUG: #0 C:\wamp\www\seo\application\vendor\Pr\Cacher.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\seo...', 23, Array)
#1 C:\wamp\www\seo\application\vendor\Pr\PageRank.php(16): require_once('C:\wamp\www\seo...')
#2 C:\wamp\www\seo\application\classes\Controller\Base.php(14): require_once('C:\wamp\www\seo...')
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(6): Controller_Base->before()
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\application\vendor\Pr\Cacher.php:23
2014-06-07 10:10:55 --- CRITICAL: ErrorException [ 2 ]: dir(C:\wamp\www\seo\application\vendor\Pr\Cacher.php,C:\wamp\www\seo\application\vendor\Pr\Cacher.php):  ~ APPPATH\vendor\Pr\Cacher.php [ 23 ] in file:line
2014-06-07 10:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(C:\wamp\www...', 'C:\wamp\www\seo...', 23, Array)
#1 C:\wamp\www\seo\application\vendor\Pr\Cacher.php(23): dir('C:\wamp\www\seo...')
#2 C:\wamp\www\seo\application\vendor\Pr\PageRank.php(16): require_once('C:\wamp\www\seo...')
#3 C:\wamp\www\seo\application\classes\Controller\Base.php(14): require_once('C:\wamp\www\seo...')
#4 C:\wamp\www\seo\application\classes\Controller\Main.php(6): Controller_Base->before()
#5 C:\wamp\www\seo\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-06-07 10:12:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\vendor\Pr\Cacher.php [ 23 ] in file:line
2014-06-07 10:12:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-07 10:12:33 --- CRITICAL: ErrorException [ 2 ]: dir(C:\wamp\www\seo\application\vendor\Pr\Cacher.php,C:\wamp\www\seo\application\vendor\Pr\Cacher.php):  ~ APPPATH\vendor\Pr\Cacher.php [ 37 ] in file:line
2014-06-07 10:12:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(C:\wamp\www...', 'C:\wamp\www\seo...', 37, Array)
#1 C:\wamp\www\seo\application\vendor\Pr\Cacher.php(37): dir('C:\wamp\www\seo...')
#2 C:\wamp\www\seo\application\vendor\Pr\PageRank.php(55): Cacher->Cacher('_google')
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(12): GooglePageRank->GooglePageRank('2040cars.com')
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-06-07 10:12:57 --- CRITICAL: ErrorException [ 4096 ]: Object of class Directory could not be converted to string ~ APPPATH\vendor\Pr\Cacher.php [ 57 ] in C:\wamp\www\seo\application\vendor\Pr\Cacher.php:57
2014-06-07 10:12:57 --- DEBUG: #0 C:\wamp\www\seo\application\vendor\Pr\Cacher.php(57): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\seo...', 57, Array)
#1 C:\wamp\www\seo\application\vendor\Pr\Cacher.php(125): Cacher->fetch('http://www.goog...', 86400)
#2 C:\wamp\www\seo\application\vendor\Pr\PageRank.php(56): Cacher->fetchContents('http://www.goog...', 86400)
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(12): GooglePageRank->GooglePageRank('2040cars.com')
#4 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\seo\application\vendor\Pr\Cacher.php:57
2014-06-07 11:02:09 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Parse\Pr.php [ 9 ] in file:line
2014-06-07 11:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-07 11:02:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Parse\Pr.php [ 9 ] in file:line
2014-06-07 11:02:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-07 11:02:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$pr ~ APPPATH\classes\Parse\Pr.php [ 9 ] in C:\wamp\www\seo\application\classes\Parse\Pr.php:9
2014-06-07 11:02:54 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Parse\Pr.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\seo...', 9, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Main.php(14): Parse_Pr->getPage()
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\application\classes\Parse\Pr.php:9
2014-06-07 11:20:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pr ~ APPPATH\classes\Parse\Pr.php [ 13 ] in C:\wamp\www\seo\application\classes\Parse\Pr.php:13
2014-06-07 11:20:58 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Parse\Pr.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 13, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Main.php(14): Parse_Pr->getPage()
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\application\classes\Parse\Pr.php:13
2014-06-07 11:31:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getTimestamp() on a non-object ~ APPPATH\vendor\Domain\Main.php [ 27 ] in file:line
2014-06-07 11:31:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line