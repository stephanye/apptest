<?php
$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=activity/makepay';
#$access_link = 'http://bbs.xizi.com/api/app/index.php?r=activity/makepay';

$data_params = [
	'params' => [
		'channel' => "alipay",
		'sid' => "601036",
		'tid' => "3839175"
	]
];

$data_params = json_encode($data_params);