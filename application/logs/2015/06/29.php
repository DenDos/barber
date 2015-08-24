<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-29 05:40:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Model\base.php [ 13 ] in file:line
2015-06-29 05:40:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 05:45:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-06-29 05:45:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 05:49:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-06-29 05:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 05:57:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Model\base.php [ 11 ] in file:line
2015-06-29 05:57:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 06:06:53 --- CRITICAL: View_Exception [ 0 ]: The requested view show could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\barber\www\system\classes\Kohana\View.php:145
2015-06-29 06:06:53 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('show')
#1 Z:\home\barber\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('show', NULL)
#2 Z:\home\barber\www\application\classes\Controller\test.php(18): Kohana_View::factory('show')
#3 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barber\www\system\classes\Kohana\View.php:145
2015-06-29 06:09:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: clients ~ APPPATH\views\template\admin.php [ 1 ] in Z:\home\barber\www\application\views\template\admin.php:1
2015-06-29 06:09:33 --- DEBUG: #0 Z:\home\barber\www\application\views\template\admin.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 1, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\admin.php:1
2015-06-29 06:10:35 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\admin.php [ 1 ] in Z:\home\barber\www\application\views\template\admin.php:1
2015-06-29 06:10:35 --- DEBUG: #0 Z:\home\barber\www\application\views\template\admin.php(1): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\barber\...', 1, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\template\admin.php:1
2015-06-29 06:11:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Application::get_all() ~ APPPATH\classes\Controller\admin.php [ 10 ] in file:line
2015-06-29 06:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 06:13:44 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Application as array ~ APPPATH\views\template\admin.php [ 4 ] in file:line
2015-06-29 06:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 06:14:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Application as array ~ APPPATH\views\template\admin.php [ 4 ] in file:line
2015-06-29 06:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 06:36:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin.php [ 19 ] in file:line
2015-06-29 06:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 06:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin.php [ 18 ] in file:line
2015-06-29 06:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 06:40:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin.php [ 18 ] in file:line
2015-06-29 06:40:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line