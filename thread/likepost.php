<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=thread/reply&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/likepost&v=3.6';
$access_link = 'http://localhost/bbs/pwbbs2014/app/index.php?r=thread/likepost&v=3.6';

$data_params = [
    'params' => [
        'tid' => 3400017,
        'pid' => 42311457
    ]
];

$data_params = json_encode($data_params);