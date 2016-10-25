<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenterapi/bindsocial&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=UcenterApi/bindsocial&v=4.0';
// $access_link = 'http://localhost/bbs/dev/api/app/index.php?r=UcenterApi/bindsocial&v=4.0';
$access_link = 'http://testbbs.xizi.com/api/app/index.php?r=UcenterApi/bindsocial&v=4.0';


$data_params = [
    'params' => [
        'api_ticket' => '6d8ncvo0fd73r6sbfaspv7jse6',
        'username'  => '15767763278',
        'code'  => '827289',
        'social_info' => ['social_id'=>'test', 'social_type'=>4, 'gender'=>1]
    ]
];

$data_params = json_encode($data_params);