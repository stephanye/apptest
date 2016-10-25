<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenterapi/signup&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=UcenterApi/signup&v=4.0';
$access_link = 'http://testbbs.xizi.com/api/app/index.php?r=UcenterApi/signup&v=4.0';

// $data_params = [
// 	'params' => [
// 		"gender" => "0",
//         "social_info" => [
//             "assist_id" => "",
//             "avatar" => "http://qzapp.qlogo.cn/qzapp/100280306/EF03164F8AF7F1CD1386CCE0BF5B4AD0/100",
//             "gender" => "0",
//             "social_id" => "EF03164F8AF7F1CD1386CCE0BF5B4AD0",
//             "social_type" => "1"
//         ]
// 	]
// ];
//
$data_params = [
"params" => [
"username" => "坏人",
"social_info" => [
"gender" => 1,
"social_type" => 1,
"social_id" => "9190FC86A9C1A01F599BB168D2A96A26"
]
]
];

$data_params = json_encode($data_params);