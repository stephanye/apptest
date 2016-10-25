<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenterapi/sendphone&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=UcenterApi/sendphone&v=4.0';
// $access_link = 'http://localhost/bbs/dev/api/app/index.php?r=UcenterApi/sendphone&v=4.0';
$access_link = 'http://testbbs.xizi.com/api/app/index.php?r=UcenterApi/sendphone&v=4.0';


$data_params = [
	'params' => [
        'phone' => '15767763278',
        'type'  => 3
	]
];

$data_params = json_encode($data_params);