<?php
$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenterapi/checkcode&v=4.0';

$data_params = [
	'params' => [
		'code' => '111',
		'api_ticket' => '',
	]
];

$data_params = json_encode($data_params);