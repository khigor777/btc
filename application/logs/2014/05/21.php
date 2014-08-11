<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-21 04:14:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::style(), called in C:\wamp\www\seo\application\classes\Controller\Base.php on line 25 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 207 ] in C:\wamp\www\seo\system\classes\Kohana\HTML.php:207
2014-05-21 04:14:59 --- DEBUG: #0 C:\wamp\www\seo\system\classes\Kohana\HTML.php(207): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\seo...', 207, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Base.php(25): Kohana_HTML::style()
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\system\classes\Kohana\HTML.php:207
2014-05-21 05:36:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 18 ] in file:line
2014-05-21 05:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-21 10:15:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Main.php [ 15 ] in C:\wamp\www\seo\application\classes\Controller\Main.php:15
2014-05-21 10:15:48 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\seo...', 15, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Main.php:15
2014-05-21 10:16:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Main.php [ 15 ] in C:\wamp\www\seo\application\classes\Controller\Main.php:15
2014-05-21 10:16:52 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\seo...', 15, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\seo\application\classes\Controller\Main.php:15
2014-05-21 10:19:35 --- CRITICAL: ErrorException [ 2 ]: file_put_contents() expects at least 2 parameters, 1 given ~ APPPATH\classes\Controller\Main.php [ 13 ] in file:line
2014-05-21 10:19:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'C:\wamp\www\seo...', 13, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Main.php(13): file_put_contents('http://planbusi...')
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-21 10:26:25 --- CRITICAL: ErrorException [ 1 ]: Class 'CurlRequests' not found ~ APPPATH\classes\Parse\Index.php [ 14 ] in file:line
2014-05-21 10:26:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line