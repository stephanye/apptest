<?php
#$access_link = 'http://192.168.2.91:7777/index.php?r=thread/postcontet&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/postcontent&v=4.0';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=thread/postcontent';

$data_params = [
	'params' => [
		#'author' => 0,
		'onlyreply' => 0,
		#'ordertype' =>0,
		'page' => 1,
		#'pagesize' => 1,
		'tid' => 3959398,
		'jumpreply' =>0
    ]
];

$data_params = json_encode($data_params);