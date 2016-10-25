<?php
// $access_link = 'http://192.168.2.91:7777/index.php?r=thread/postcontet&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=member/threadnotice&v=3.6';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=member/threadnotice&v=3.6&uid=2410070';

$data_params = [
    'params' => [
        'type' => 0,
         'uid' =>2410070,
        'page' => 1
    ],
    'uid' => 2410070
];

$data_params = json_encode($data_params);

