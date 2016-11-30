<?php
// $access_link = 'http://www.xiziquan.com/index.php?r=thread/commentreply&v=3.6&debug=1208';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=thread/commentreply&v=4.2.1';
$access_link = 'http://bbsfengbiao.xizi.com/api/app/index.php?r=thread/commentreply&v=4.2.1';
// $access_link = 'http://fb.xizi.com/api/app/index.php?r=thread/commentreply&v=4.2.1';
// $access_link = 'http://testbbs.xizi.com/api/app/index.php?r=thread/commentreply&v=4.2.1';

$data_params = [
    'params' => [
        'tid' => 3959527,
        'pid' => 50261240,
        'content' => '翻身咸鱼11222222',
        'if_reply' => 0,
        'phonetype' => 1
    ]
];

$data_params = json_encode($data_params);