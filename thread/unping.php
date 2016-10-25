<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=thread/ping';
$access_link = 'http://bbs.xizi.com/api/app/index.php?r=thread/unping';

$data_params = [
	'params' => [
		'tid' => 3817501
	]
];

$data_params = json_encode($data_params);