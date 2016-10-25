<?php
$access_link = 'http://192.168.2.91:7777/index.php?r=thread/ping';
#$access_link = 'http://bbs.xizi.com/api/app/index.php?r=thread/ping';

$data_params = [
	'params' => [
		#'tid' => 2403
		'tid' => 14
	]
];

$data_params = json_encode($data_params);