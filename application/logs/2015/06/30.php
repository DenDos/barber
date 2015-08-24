<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-30 05:17:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instase() ~ APPPATH\classes\Controller\admin.php [ 10 ] in file:line
2015-06-30 05:17:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:17:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instase() ~ APPPATH\classes\Controller\auth.php [ 10 ] in file:line
2015-06-30 05:17:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:17:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instanse() ~ APPPATH\classes\Controller\auth.php [ 10 ] in file:line
2015-06-30 05:17:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:17:49 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\admin.php [ 1 ] in Z:\home\barber\www\application\views\template\admin.php:1
2015-06-30 05:17:49 --- DEBUG: #0 Z:\home\barber\www\application\views\template\admin.php(1): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barber\...', 1, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\admin.php:1
2015-06-30 05:17:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\barber\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\barber\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\barber\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\barber\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\barber\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\barber\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:17:49 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\barber\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\barber\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:18:09 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:18:09 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\barber\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\barber\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:19:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:19:41 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\barber\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 Z:\home\barber\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\barber\www\system\classes\Kohana\Cookie.php:67
2015-06-30 05:20:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: client ~ APPPATH\views\template\auth.php [ 3 ] in Z:\home\barber\www\application\views\template\auth.php:3
2015-06-30 05:20:00 --- DEBUG: #0 Z:\home\barber\www\application\views\template\auth.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 3, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\auth.php:3
2015-06-30 05:24:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\auth.php [ 6 ] in file:line
2015-06-30 05:24:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:25:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\auth.php [ 6 ] in file:line
2015-06-30 05:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:25:22 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant message - assumed 'message' ~ APPPATH\views\template\auth.php [ 1 ] in Z:\home\barber\www\application\views\template\auth.php:1
2015-06-30 05:25:22 --- DEBUG: #0 Z:\home\barber\www\application\views\template\auth.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\barber\...', 1, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\auth.php:1
2015-06-30 05:25:40 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant message - assumed 'message' ~ APPPATH\views\template\auth.php [ 1 ] in Z:\home\barber\www\application\views\template\auth.php:1
2015-06-30 05:25:40 --- DEBUG: #0 Z:\home\barber\www\application\views\template\auth.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\barber\...', 1, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\auth.php:1
2015-06-30 05:25:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\template\auth.php [ 1 ] in Z:\home\barber\www\application\views\template\auth.php:1
2015-06-30 05:25:49 --- DEBUG: #0 Z:\home\barber\www\application\views\template\auth.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 1, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\auth.php:1
2015-06-30 05:38:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\auth.php [ 22 ] in file:line
2015-06-30 05:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:43:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH\classes\Controller\admin.php [ 10 ] in file:line
2015-06-30 05:43:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:50:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 14 ] in file:line
2015-06-30 05:50:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:51:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 14 ] in file:line
2015-06-30 05:51:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 14 ] in file:line
2015-06-30 05:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:53:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 14 ] in file:line
2015-06-30 05:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:57:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH\classes\Controller\admin.php [ 10 ] in file:line
2015-06-30 05:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:57:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 14 ] in file:line
2015-06-30 05:57:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 05:58:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH\classes\Controller\admin.php [ 10 ] in file:line
2015-06-30 05:58:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 06:00:46 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 34 ] in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:00:46 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(34): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 34, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:01:27 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 34 ] in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:01:27 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(34): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 34, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:02:49 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\barber\www\application\classes\Controller\admin.php on line 34 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\barber\www\system\classes\Kohana\View.php:28
2015-06-30 06:02:49 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\barber\...', 28, Array)
#1 Z:\home\barber\www\application\classes\Controller\admin.php(34): Kohana_View::factory('template/admin', Object(Database_MySQL_Result))
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\system\classes\Kohana\View.php:28
2015-06-30 06:03:22 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 34 ] in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:03:22 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(34): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 34, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:03:31 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 34 ] in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:03:31 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(34): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 34, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:04:42 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 34 ] in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:04:42 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(34): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 34, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:34
2015-06-30 06:06:28 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 35 ] in Z:\home\barber\www\application\classes\Controller\admin.php:35
2015-06-30 06:06:28 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(35): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 35, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:35
2015-06-30 06:08:45 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\admin.php [ 10 ] in Z:\home\barber\www\application\classes\Controller\admin.php:10
2015-06-30 06:08:45 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\admin.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\barber\...', 10, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\admin.php:10