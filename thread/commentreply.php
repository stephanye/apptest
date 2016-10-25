<?php
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/commentreply&v=3.6&debug=1208';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=thread/commentreply&v=4.2';

$data_params = [
    'params' => [
        'tid' => 3400017,
        'pid' => 42318006,
        'content' => '测试回复',
        'if_reply' => 1,
        'phonetype' => 1
    ]
];

$data_params = json_encode($data_params);