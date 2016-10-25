<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=thread/post&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/post&v=3.6';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=thread/post&v=4.2';

$data_params = [
	'params' => [
        "content" => "对方水电费是123",
        "special" => 0,
        "fid" => "761",
        "tid" => "0",
        "phonetype" => "2",
        "mode" => "0",
        "extra" => [
            [
                "width" => "412.5",
                "imageSandboxPath" => "1466649902_B52E8209-8ED3-4149-B2D3-FA1A1A4141A4",
                "aid" => "8073114",
                "height" => "550"
            ]
        ],
        "title" => "哦啦啦",
        "special" => "10"
	]
];

$data_params = json_encode($data_params);