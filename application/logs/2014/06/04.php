<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-04 04:49:08 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\Route.php [ 107 ] in C:\wamp\www\seo\system\classes\Kohana\Route.php:107
2014-06-04 04:49:08 --- DEBUG: #0 C:\wamp\www\seo\system\classes\Kohana\Route.php(107): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\wamp\www\seo...', 107, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Route.php(215): Kohana_Route::get(Array)
#2 C:\wamp\www\seo\application\config\pagination.php(17): Kohana_Route::url(Array)
#3 C:\wamp\www\seo\system\classes\Kohana\Core.php(829): include('C:\wamp\www\seo...')
#4 C:\wamp\www\seo\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('C:\wamp\www\seo...')
#5 C:\wamp\www\seo\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('pagination')
#6 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(115): Kohana_Config->load('pagination')
#7 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(85): Kohana_Pagination->config_group()
#8 C:\wamp\www\seo\modules\pagination\classes\kohana\pagination.php(73): Kohana_Pagination->__construct(Array, NULL)
#9 C:\wamp\www\seo\application\classes\Controller\Main.php(68): Kohana_Pagination::factory(Array)
#10 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2, 'http://seo/main')
#11 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\seo\system\classes\Kohana\Route.php:107
2014-06-04 04:51:03 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\Route.php [ 107 ] in C:\wamp\www\seo\system\classes\Kohana\Route.php:107
2014-06-04 04:51:03 --- DEBUG: #0 C:\wamp\www\seo\system\classes\Kohana\Route.php(107): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\wamp\www\seo...', 107, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Route.php(215): Kohana_Route::get(Array)
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(91): Kohana_Route::url(Array)
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(68): Controller_Main->getRouteUrl()
#4 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2, 'http://seo/main')
#5 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\seo\system\classes\Kohana\Route.php:107
2014-06-04 04:51:39 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\Kohana\Route.php [ 107 ] in C:\wamp\www\seo\system\classes\Kohana\Route.php:107
2014-06-04 04:51:39 --- DEBUG: #0 C:\wamp\www\seo\system\classes\Kohana\Route.php(107): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\wamp\www\seo...', 107, Array)
#1 C:\wamp\www\seo\system\classes\Kohana\Route.php(215): Kohana_Route::get(Array)
#2 C:\wamp\www\seo\application\classes\Controller\Main.php(91): Kohana_Route::url(Array)
#3 C:\wamp\www\seo\application\classes\Controller\Main.php(68): Controller_Main->getRouteUrl()
#4 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Controller_Main->getDataForTable(2, 'http://seo/main')
#5 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\seo\system\classes\Kohana\Route.php:107
2014-06-04 05:17:05 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Parse\Index.php [ 94 ] in C:\wamp\www\seo\application\classes\Parse\Index.php:94
2014-06-04 05:17:05 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Parse\Index.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\seo...', 94, Array)
#1 C:\wamp\www\seo\application\classes\Parse\Index.php(81): Parse_Index->getCaptchFromAntigate('')
#2 C:\wamp\www\seo\application\classes\Parse\Index.php(65): Parse_Index->getYandexCaptcha('<!DOCTYPE html>...')
#3 C:\wamp\www\seo\application\classes\Parse\Index.php(44): Parse_Index->getParamsForCaptcha('<!DOCTYPE html>...')
#4 C:\wamp\www\seo\application\classes\Parse\Index.php(21): Parse_Index->parseYandex('<!DOCTYPE html>...')
#5 C:\wamp\www\seo\application\classes\Parse\Index.php(111): Parse_Index->getYandexIndex('play.ru')
#6 C:\wamp\www\seo\application\classes\Controller\Link.php(64): Parse_Index->getPage()
#7 C:\wamp\www\seo\application\classes\Controller\Link.php(37): Controller_Link->addData(Object(Parse_Index))
#8 C:\wamp\www\seo\application\classes\Controller\Link.php(15): Controller_Link->addAllData(true)
#9 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Link->action_default()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Link))
#12 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\seo\application\classes\Parse\Index.php:94
2014-06-04 05:17:58 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Parse\Index.php [ 94 ] in C:\wamp\www\seo\application\classes\Parse\Index.php:94
2014-06-04 05:17:58 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Parse\Index.php(94): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\seo...', 94, Array)
#1 C:\wamp\www\seo\application\classes\Parse\Index.php(81): Parse_Index->getCaptchFromAntigate('')
#2 C:\wamp\www\seo\application\classes\Parse\Index.php(65): Parse_Index->getYandexCaptcha('<!DOCTYPE html>...')
#3 C:\wamp\www\seo\application\classes\Parse\Index.php(44): Parse_Index->getParamsForCaptcha('<!DOCTYPE html>...')
#4 C:\wamp\www\seo\application\classes\Parse\Index.php(21): Parse_Index->parseYandex('<!DOCTYPE html>...')
#5 C:\wamp\www\seo\application\classes\Parse\Index.php(111): Parse_Index->getYandexIndex('play.ru')
#6 C:\wamp\www\seo\application\classes\Controller\Link.php(64): Parse_Index->getPage()
#7 C:\wamp\www\seo\application\classes\Controller\Link.php(37): Controller_Link->addData(Object(Parse_Index))
#8 C:\wamp\www\seo\application\classes\Controller\Link.php(20): Controller_Link->addAllData()
#9 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Link->action_ajaxupdate()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Link))
#12 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\seo\application\classes\Parse\Index.php:94
2014-06-04 05:59:34 --- CRITICAL: ErrorException [ 2 ]: fsockopen(): unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-06-04 05:59:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): un...', 'C:\wamp\www\seo...', 243, Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 262065559, 'Unable to find ...', 5)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(11): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 06:01:37 --- CRITICAL: ErrorException [ 2 ]: fsockopen(): unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-06-04 06:01:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): un...', 'C:\wamp\www\seo...', 243, Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 262065559, 'Unable to find ...', 5)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(13): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 06:03:01 --- CRITICAL: ErrorException [ 2 ]: fsockopen(): unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-06-04 06:03:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): un...', 'C:\wamp\www\seo...', 243, Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 258395543, 'Unable to find ...', 5)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(13): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 06:03:27 --- CRITICAL: ErrorException [ 2 ]: fsockopen(): unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-06-04 06:03:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): un...', 'C:\wamp\www\seo...', 243, Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 269536663, 'Unable to find ...', 5)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\wamp\www\seo\application\classes\Controller\Main.php(13): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#7 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-06-04 06:40:45 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 m50sm3410760yha.8 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:40:45 --- DEBUG: #0 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <ya@...', Array, Array)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <ya@...', Array)
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('ya@ya.ru')
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'ya@ya.ru', Array, Array)
#5 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'ya@ya.ru', Array, Array)
#6 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\wamp\www\seo\application\classes\Controller\Config.php(41): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#9 C:\wamp\www\seo\application\classes\Controller\Config.php(14): Controller_Config->sendEmail()
#10 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#13 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:41:15 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 t6sm3380147yhc.45 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:41:15 --- DEBUG: #0 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <ya@...', Array, Array)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <ya@...', Array)
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('ya@ya.ru')
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'ya@ya.ru', Array, Array)
#5 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'ya@ya.ru', Array, Array)
#6 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\wamp\www\seo\application\classes\Controller\Config.php(41): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#9 C:\wamp\www\seo\application\classes\Controller\Config.php(14): Controller_Config->sendEmail()
#10 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#13 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:42:14 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 k66sm3387617yhg.39 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:42:14 --- DEBUG: #0 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <ya@...', Array, Array)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <ya@...', Array)
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('ya@ya.ru')
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'ya@ya.ru', Array, Array)
#5 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'ya@ya.ru', Array, Array)
#6 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\wamp\www\seo\application\classes\Controller\Config.php(42): Email::send('khigor777@yande...', 'ya@ya.ru', 'hello world', '?????? ?? ?????...')
#9 C:\wamp\www\seo\application\classes\Controller\Config.php(14): Controller_Config->sendEmail()
#10 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#13 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:43:07 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 l46sm3381531yhn.49 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 06:43:07 --- DEBUG: #0 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <tes...', Array, Array)
#2 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <tes...', Array)
#3 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('test@ya.ru')
#4 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'test@ya.ru', Array, Array)
#5 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'test@ya.ru', Array, Array)
#6 C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\wamp\www\seo\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\wamp\www\seo\application\classes\Controller\Config.php(42): Email::send('khigor777@yande...', 'test@ya.ru', 'hello world', '?????? ?? ?????...')
#9 C:\wamp\www\seo\application\classes\Controller\Config.php(14): Controller_Config->sendEmail()
#10 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Config->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Config))
#13 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\seo\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-06-04 07:41:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\classes\Controller\Link.php [ 65 ] in C:\wamp\www\seo\application\classes\Controller\Link.php:65
2014-06-04 07:41:22 --- DEBUG: #0 C:\wamp\www\seo\application\classes\Controller\Link.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\seo...', 65, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Link.php(30): Controller_Link->addDefault()
#2 C:\wamp\www\seo\application\classes\Controller\Link.php(15): Controller_Link->addAllData(true)
#3 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Link->action_default()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Link))
#6 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\seo\application\classes\Controller\Link.php:65
2014-06-04 08:06:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Cookie::get(), called in C:\wamp\www\seo\application\classes\Controller\Link.php on line 11 and defined ~ SYSPATH\classes\Kohana\Cookie.php [ 55 ] in C:\wamp\www\seo\system\classes\Kohana\Cookie.php:55
2014-06-04 08:06:29 --- DEBUG: #0 C:\wamp\www\seo\system\classes\Kohana\Cookie.php(55): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\seo...', 55, Array)
#1 C:\wamp\www\seo\application\classes\Controller\Link.php(11): Kohana_Cookie::get()
#2 C:\wamp\www\seo\system\classes\Kohana\Controller.php(84): Controller_Link->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\seo\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Link))
#5 C:\wamp\www\seo\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\seo\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\seo\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\seo\system\classes\Kohana\Cookie.php:55