<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=thread/editcontent&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/editcontent&v=3.6';
#$access_link = 'http://testbbs.xizi.com/api/app/index.php?r=thread/postcontent';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=thread/postModify';

$data_params = [
	'params' => [
		'tid' => 3959398,
        'onlyreply' => 0,
        'page' => 1
	]
];
//{"params":{"tid":"3971466"}} 3959400  3959398
$data_params = json_encode($data_params);

// $data_params = [
//     'extra' => [
//         [
//             'aid' => 3400017
//         ]
//         [
//             'desc' ->'aaa'
//         ]
//     ]
// ];