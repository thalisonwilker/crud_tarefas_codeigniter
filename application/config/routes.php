<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['tarefa/(:any)'] = 'home/tarefa/$1';
$route['login'] = 'home/login';
$route['logout'] = 'home/logout';
$route['cadastro'] = 'home/cadastro';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
