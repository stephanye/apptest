<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=home/attention&v=3.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=home/attention&v=3.6&debug=1208';
// $access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=home/attention&v=4.1';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=extend/Share&v=4.2.1';
// $access_link = 'http://www.xiziquan.com/index.php?r=home/sharetoday&v=4.2.1';
$rand = rand(1,10);
$data_params = [
	'params' => [
		'tid' => $rand
	]
];

$data_params = json_encode($data_params);
