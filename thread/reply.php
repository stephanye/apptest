<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=thread/reply&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/reply&v=4.0';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=thread/reply&v=4.2.1';

$data_params = [
	'params' => [
		'tid' => 3395704,
		'pid' => 0,
		'content' => '小弥勒佛哈哈哈12312121213213110000000都是防守打法是134',
        "standpoint" => 0,
	]
];

$data_params = json_encode($data_params);