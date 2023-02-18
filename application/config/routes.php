<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* products routes */
$route['default_controller'] = 'billings';
$route['filter'] = 'billings/filter';

/* default routes in CI */
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;