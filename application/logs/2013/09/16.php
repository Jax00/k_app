<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-16 22:03:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function request() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2013-09-16 22:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-16 22:06:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2013-09-16 22:06:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-16 22:24:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH\views\employees_table.php [ 7 ] in file:line
2013-09-16 22:24:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-16 22:28:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: base_url ~ APPPATH\views\employees_table.php [ 7 ] in C:\xampp\htdocs\k_app\application\views\employees_table.php:7
2013-09-16 22:28:57 --- DEBUG: #0 C:\xampp\htdocs\k_app\application\views\employees_table.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\k_app\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\k_app\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\k_app\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\k_app\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\k_app\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\k_app\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\k_app\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\k_app\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\k_app\application\views\employees_table.php:7
2013-09-16 22:33:57 --- CRITICAL: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH\views\employees_table.php [ 7 ] in file:line
2013-09-16 22:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line