<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenterapi/bindsocial&v=4.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=UcenterApi/bindsocial&v=4.0';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=Recommend/getrecommend&v=3.6';
// $access_link = 'http://testbbs.xizi.com/api/app/index.php?r=UcenterApi/bindsocial&v=4.0';


$data_params = [
    'params' => [
        'identity' => 'idx_quan_top_img',
        'fid'  => 0,
        'num'  => 1
    ]
];

$data_params = json_encode($data_params);