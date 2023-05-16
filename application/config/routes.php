<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['play'] = 'color_game/play';
$route['default_controller'] = 'color_game';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['(:any)'] = 'color_game/index/$1';