<?php
#$access_link = 'http://192.168.2.91:7777/index.php?r=forum/thread&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=forum/thread&v=3.6';
$access_link = 'http://testbbs.xizi.com/api/app/index.php?r=forum/thread&v=3.6';
$access_link = 'http://bbsfengbiao.xizi.com/api/app/index.php?r=forum/thread&v=3.6';
// $access_link = 'http://localhost/bbs/dev/api/app/index.php?r=forum/thread&v=3.6';

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