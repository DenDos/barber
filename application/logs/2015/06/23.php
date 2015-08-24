<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-23 04:20:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 15 ] in file:line
2015-06-23 04:20:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 04:34:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 15 ] in file:line
2015-06-23 04:34:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 04:58:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function save() ~ APPPATH\classes\Model\base.php [ 11 ] in file:line
2015-06-23 04:58:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 05:06:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'texxt' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `texxt` = '123' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 05:06:45 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(14): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(17): Model_Base->write('123')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 05:54:39 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant message - assumed 'message' ~ APPPATH\views\home.php [ 11 ] in Z:\home\barber\www\application\views\home.php:11
2015-06-23 05:54:39 --- DEBUG: #0 Z:\home\barber\www\application\views\home.php(11): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\barber\...', 11, Array)
#1 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#2 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#3 Z:\home\barber\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\barber\www\application\views\index.php(22): Kohana_View->__toString()
#5 Z:\home\barber\www\system\classes\Kohana\View.php(62): include('Z:\home\barber\...')
#6 Z:\home\barber\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\barber\...', Array)
#7 Z:\home\barber\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\barber\www\application\views\home.php:11
2015-06-23 06:05:37 --- CRITICAL: Kohana_Exception [ 0 ]: The naem property does not exist in the Model_Application class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php:702
2015-06-23 06:05:37 --- DEBUG: #0 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('naem', '2')
#1 Z:\home\barber\www\application\classes\Model\base.php(14): Kohana_ORM->__set('naem', '2')
#2 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('2015-06-04', '23:00', '1', '2', '2', '222', '12')
#3 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php:702
2015-06-23 06:06:14 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `date` = '2015-06-04' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:06:14 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(21): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('2015-06-04', '23:00', '1', '2', '2', '222', '12')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:06:54 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `date` = '2015-06-04' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:06:54 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(21): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('2015-06-04', '23:00', '1', '2', '2', '222', '12')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `date` = '2015-06-04' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:02 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(21): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('2015-06-04', '23:00', '1', '2', '2', '222', '12')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `date` = '2015-06-04' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:25 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(21): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('2015-06-04', '23:00', '1', '2', '2', '222', '12')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `date` = '' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:31 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(21): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('', '', '', '', '', '', '')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ SELECT `first`.`id` AS `id`, `first`.`text` AS `text` FROM `first` AS `first` WHERE `name` = '' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:07:58 --- DEBUG: #0 Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `first`....', false, Array)
#1 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\barber\www\application\classes\Model\base.php(21): Kohana_ORM::factory('first', Array)
#6 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->write('', '', '', '', '', '', '')
#7 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\barber\www\modules\database\classes\Kohana\Database\Query.php:251
2015-06-23 06:18:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\main.php [ 37 ] in Z:\home\barber\www\application\classes\Controller\main.php:37
2015-06-23 06:18:38 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 37, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:37
2015-06-23 06:24:05 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:24:05 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(32): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('3')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:24:50 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:24:50 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(32): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('3')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:25:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:25:01 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(32): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('3')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:25:52 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:25:52 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(32): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('3')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:32
2015-06-23 06:27:54 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:27:54 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('asd')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:29:19 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:29:19 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('s')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:29:46 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:29:46 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('sad')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:32:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:32:07 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:34:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH\classes\Model\base.php [ 31 ] in file:line
2015-06-23 06:34:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:34:18 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:34:18 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('2')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:35:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\base.php [ 33 ] in file:line
2015-06-23 06:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:36:33 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:36:33 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('5')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:34
2015-06-23 06:37:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\base.php [ 42 ] in file:line
2015-06-23 06:37:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:37:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\base.php [ 42 ] in file:line
2015-06-23 06:37:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:37:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Model\base.php [ 42 ] in file:line
2015-06-23 06:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:38:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Model\base.php [ 41 ] in file:line
2015-06-23 06:38:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:38:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Model\base.php [ 41 ] in file:line
2015-06-23 06:38:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:38:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Model\base.php [ 40 ] in file:line
2015-06-23 06:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:39:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:35
2015-06-23 06:39:07 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(35): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('2')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:35
2015-06-23 06:39:33 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete application model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\barber\www\application\classes\Model\base.php:35
2015-06-23 06:39:33 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(35): Kohana_ORM->delete()
#1 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('2')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:35
2015-06-23 06:41:41 --- CRITICAL: Kohana_Exception [ 0 ]: The _loaded property does not exist in the Model_Application class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php:603
2015-06-23 06:41:41 --- DEBUG: #0 Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_loaded')
#1 Z:\home\barber\www\application\classes\Model\base.php(34): Kohana_ORM->__get('_loaded')
#2 Z:\home\barber\www\application\classes\Controller\main.php(37): Model_Base->delete('2')
#3 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barber\www\modules\orm\classes\Kohana\ORM.php:603
2015-06-23 06:50:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2015-06-23 06:50:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 06:52:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\main.php [ 25 ] in file:line
2015-06-23 06:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 10:52:03 --- CRITICAL: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\barber\www\system\classes\Kohana\View.php:145
2015-06-23 10:52:03 --- DEBUG: #0 Z:\home\barber\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('home')
#1 Z:\home\barber\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('home', Array)
#2 Z:\home\barber\www\application\classes\Controller\main.php(42): Kohana_View::factory('home', Array)
#3 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\barber\www\system\classes\Kohana\View.php:145
2015-06-23 10:52:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Mail' not found ~ APPPATH\classes\Controller\main.php [ 12 ] in file:line
2015-06-23 10:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 10:59:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\main.php [ 30 ] in file:line
2015-06-23 10:59:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 11:00:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: get_Id ~ APPPATH\classes\Controller\main.php [ 28 ] in Z:\home\barber\www\application\classes\Controller\main.php:28
2015-06-23 11:00:26 --- DEBUG: #0 Z:\home\barber\www\application\classes\Controller\main.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\barber\...', 28, Array)
#1 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\barber\www\application\classes\Controller\main.php:28
2015-06-23 11:07:25 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Model\base.php [ 33 ] in Z:\home\barber\www\application\classes\Model\base.php:33
2015-06-23 11:07:25 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\base.php(33): Kohana_Core::error_handler(8, 'Uninitialized s...', 'Z:\home\barber\...', 33, Array)
#1 Z:\home\barber\www\application\classes\Controller\main.php(25): Model_Base->get_id('')
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\base.php:33
2015-06-23 11:32:31 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:32:31 --- DEBUG: #0 Z:\home\barber\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\barber\...', 4, Array)
#1 Z:\home\barber\www\modules\email\init.php(4): include()
#2 Z:\home\barber\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\barber\...')
#3 Z:\home\barber\www\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 Z:\home\barber\www\index.php(102): require('Z:\home\barber\...')
#5 {main} in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:32:54 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:32:54 --- DEBUG: #0 Z:\home\barber\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\barber\...', 4, Array)
#1 Z:\home\barber\www\modules\email\init.php(4): include()
#2 Z:\home\barber\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\barber\...')
#3 Z:\home\barber\www\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 Z:\home\barber\www\index.php(102): require('Z:\home\barber\...')
#5 {main} in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:32:56 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:32:56 --- DEBUG: #0 Z:\home\barber\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\barber\...', 4, Array)
#1 Z:\home\barber\www\modules\email\init.php(4): include()
#2 Z:\home\barber\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\barber\...')
#3 Z:\home\barber\www\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 Z:\home\barber\www\index.php(102): require('Z:\home\barber\...')
#5 {main} in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:33:23 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:33:23 --- DEBUG: #0 Z:\home\barber\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\barber\...', 4, Array)
#1 Z:\home\barber\www\modules\email\init.php(4): include()
#2 Z:\home\barber\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\barber\...')
#3 Z:\home\barber\www\application\bootstrap.php(133): Kohana_Core::modules(Array)
#4 Z:\home\barber\www\index.php(102): require('Z:\home\barber\...')
#5 {main} in Z:\home\barber\www\modules\email\init.php:4
2015-06-23 11:38:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Mail::set_data() ~ APPPATH\classes\Controller\main.php [ 29 ] in file:line
2015-06-23 11:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 11:47:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in file:line
2015-06-23 11:47:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 11:48:04 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530 5.7.0 Must issue a STARTTLS command first. uq1sm5664951lbb.18 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-06-23 11:48:04 --- DEBUG: #0 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530 5.7.0 Must ...', Array)
#1 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <cot...', Array, Array)
#2 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <cot...', Array)
#3 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('cotoha_92@mail....')
#4 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'cotoha_92@mail....', Array, Array)
#5 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'cotoha_92@mail....', Array, Array)
#6 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 Z:\home\barber\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 Z:\home\barber\www\application\classes\Model\mail.php(11): Email::send('cotoha92@gmail....', 'cotoha_92@mail....', '??????????', '???????????????...')
#9 Z:\home\barber\www\application\classes\Controller\main.php(29): Model_Mail->send_data(Array)
#10 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-06-23 11:48:52 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530 5.7.0 Must issue a STARTTLS command first. ci2sm703576lad.48 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-06-23 11:48:52 --- DEBUG: #0 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530 5.7.0 Must ...', Array)
#1 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <cot...', Array, Array)
#2 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <cot...', Array)
#3 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('cotoha_92@mail....')
#4 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'cotoha_92@mail....', Array, Array)
#5 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'cotoha_92@mail....', Array, Array)
#6 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 Z:\home\barber\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 Z:\home\barber\www\application\classes\Model\mail.php(11): Email::send('cotoha92@gmail....', 'cotoha_92@mail....', '??????????', '???????????????...', false)
#9 Z:\home\barber\www\application\classes\Controller\main.php(29): Model_Mail->send_data(Array)
#10 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-06-23 11:50:33 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530 5.7.0 Must issue a STARTTLS command first. zf3sm5654200lbb.2 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-06-23 11:50:33 --- DEBUG: #0 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530 5.7.0 Must ...', Array)
#1 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 Z:\home\barber\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 Z:\home\barber\www\application\classes\Model\mail.php(16): Email::send('kohanablog@gmai...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#9 Z:\home\barber\www\application\classes\Controller\main.php(29): Model_Mail->send_data(Array)
#10 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2015-06-23 11:53:28 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2015-06-23 11:53:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\barber\...', 243, Array)
#1 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 72584528, 'Unable to find ...', 5)
#2 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\barber\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\barber\www\application\classes\Model\mail.php(16): Email::send('kohanablog@gmai...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\barber\www\application\classes\Controller\main.php(29): Model_Mail->send_data(Array)
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-06-23 12:02:56 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2015-06-23 12:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\barber\...', 243, Array)
#1 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 72584552, 'Unable to find ...', 5)
#2 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\barber\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\barber\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\barber\www\application\classes\Model\mail.php(24): Email::send('kohanablog@gmai...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\barber\www\application\classes\Controller\main.php(29): Model_Mail->send_data(Array)
#8 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-06-23 12:17:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\classes\Model\mail.php [ 15 ] in file:line
2015-06-23 12:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-23 12:18:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\classes\Model\mail.php [ 15 ] in Z:\home\barber\www\application\classes\Model\mail.php:15
2015-06-23 12:18:12 --- DEBUG: #0 Z:\home\barber\www\application\classes\Model\mail.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\barber\...', 15, Array)
#1 Z:\home\barber\www\application\classes\Controller\main.php(29): Model_Mail->send_data(Array)
#2 Z:\home\barber\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\barber\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\barber\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\barber\www\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\barber\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\barber\www\application\classes\Model\mail.php:15