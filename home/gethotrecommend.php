<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=home/hot&v=4.0';
$access_link = 'http://localhost/pwbbs2014/api/xiziquan/index.php?r=home/getHotRecommend&v=4.0';
$data_params = [
	'params' => [
		'type' => 0,
		'lastid' => 3197803,
		'pagenum' => 20,
        'if_index' => 1,
	]
];

$data_params = json_encode($data_params);