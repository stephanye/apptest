<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=home/attention&v=3.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=home/attention&v=3.6&debug=1208';
// $access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=home/attention&v=4.1';
// $access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=home/attention&v=4.2.1';
$access_link = 'http://www.xiziquan.com/index.php?r=home/attention&v=4.2.1';

$data_params = [
	'params' => [
		'type' => 0,
		'lastid' => 31973,
		'pagenum' => 20,
        'if_index' => 1,
	]
];

$data_params = json_encode($data_params);
