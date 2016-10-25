<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=thread/reply&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=find/findtool&v=3.5';

$access_link = 'http://testbbs.xizi.com/api/app/index.php?r=find/findtool&v=3.0';

// $access_link = 'http://localhost/bbs/dev/api/app/index.php?r=find/findtool&v=3.0/';

$data_params = [
	'params' => [
		'ver' => 1
	]
];

$data_params = json_encode($data_params);

echo $data_params;