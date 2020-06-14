<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*did not put much routing because removing the index.php from the url didn't work and was delaying me.
endpoints still work and routing works with the index.php */
$route['default_controller'] = 'welcome';
$route['/kinduct/endpoints'] = 'endpoints/getAllResources/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
