<?php
$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=forum/test&v=4.0';

$data_params = [
	'params' => [
		'fid' => 1,
		'ordertype' => 0,
		'digest' => 0,
		'ishot' => 0,
		'page' => 1
	]
];

$data_params = json_encode($data_params);