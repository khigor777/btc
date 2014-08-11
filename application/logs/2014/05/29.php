<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-29 07:32:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_once() on a non-object ~ APPPATH\classes\Controller\Config.php [ 18 ] in file:line
2014-05-29 07:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-29 07:36:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_once() on a non-object ~ APPPATH\classes\Controller\Config.php [ 18 ] in file:line
2014-05-29 07:36:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-29 07:36:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_once() on a non-object ~ APPPATH\classes\Controller\Config.php [ 19 ] in file:line
2014-05-29 07:36:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-29 07:36:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_once() on a non-object ~ APPPATH\classes\Controller\Config.php [ 19 ] in file:line
2014-05-29 07:36:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-29 07:40:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\Controller\Config.php [ 16 ] in C:\wamp\www\seo\application\classes\Controller\Config.php:16
2014-05-29 07:40:16 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Config.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\seo...', 16, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Config.php:16
2014-05-29 07:41:36 --- CRITICAL: Kohana_Exception [ 0 ]: The update_days property does not exist in the Model_Config class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php:702
2014-05-29 07:41:36 --- DEBUG: #0 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('update_days', '5')
#1 C:\wamp\www\seo\application\classes\Controller\Config.php(43): Kohana_ORM->__set('update_days', '5')
#2 C:\wamp\www\seo\application\classes\Controller\Config.php(23): Controller_Config->save()
#3 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php:702
2014-05-29 07:42:10 --- CRITICAL: Kohana_Exception [ 0 ]: The update_days property does not exist in the Model_Config class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php:702
2014-05-29 07:42:10 --- DEBUG: #0 C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('update_days', '5')
#1 C:\wamp\www\seo\application\classes\Controller\Config.php(43): Kohana_ORM->__set('update_days', '5')
#2 C:\wamp\www\seo\application\classes\Controller\Config.php(23): Controller_Config->save()
#3 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\seo\modules\orm\classes\Kohana\ORM.php:702
2014-05-29 07:45:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Config.php [ 16 ] in C:\wamp\www\seo\application\classes\Controller\Config.php:16
2014-05-29 07:45:19 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Config.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 16, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Config.php:16
2014-05-29 07:49:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: res ~ APPPATH\classes\Controller\Config.php [ 16 ] in C:\wamp\www\seo\application\classes\Controller\Config.php:16
2014-05-29 07:49:48 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Config.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 16, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Config.php:16
2014-05-29 08:03:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Config.php [ 36 ] in C:\wamp\www\seo\application\classes\Controller\Config.php:36
2014-05-29 08:03:19 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Config.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 36, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Config.php:36
2014-05-29 08:05:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\views\in_config.php [ 24 ] in C:\wamp\www\seo\application\views\in_config.php:24
2014-05-29 08:05:47 --- DEBUG: #0 C:\wamp\www\seo\application\views\in_config.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\seo...', 24, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\View.php(61): include('C:\wamp\www\seo...')
#2 C:\wamp\www\seo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\seo...', Array)
#3 C:\wamp\www\seo\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\seo\application\views\base\in_base.php(76): Kohana_View->__toString()
#5 C:\wamp\www\seo\system\classes\Kohana\View.php(61): include('C:\wamp\www\seo...')
#6 C:\wamp\www\seo\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\seo...', Array)
#7 C:\wamp\www\seo\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\seo\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#11 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\seo\application\views\in_config.php:24