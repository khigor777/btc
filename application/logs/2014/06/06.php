<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-06 22:26:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method FactoryDomain::getDomainInfo() ~ APPPATH\classes\Controller\Main.php [ 11 ] in file:line
2014-06-06 22:26:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-06 22:27:07 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for FactoryDomain::factory(), called in C:\wamp\www\seo\application\classes\Controller\Main.php on line 10 and defined ~ APPPATH\vendor\Domain\Main.php [ 231 ] in C:\wamp\www\seo\application\vendor\Domain\Main.php:231
2014-06-06 22:27:07 --- DEBUG: #0 C:\wamp\www\seo\application\vendor\Domain\Main.php(231): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\seo...', 231, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Main.php(10): FactoryDomain::factory('angelica-ny.com')
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\application\vendor\Domain\Main.php:231
2014-06-06 22:29:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Main::$curl ~ APPPATH\classes\Controller\Main.php [ 10 ] in C:\wamp\www\seo\application\classes\Controller\Main.php:10
2014-06-06 22:29:00 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Main.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\seo...', 10, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Main.php:10