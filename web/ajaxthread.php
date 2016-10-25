<?php
// $access_link = 'http://192.168.1.91:9999/api/app/index.php?r=web/thread&v=4.0';
$access_link = 'http://localhost/bbs/dev/api/app/index.php?r=web/ajaxthread&v=3.6&tid=3400017&onlyreply=0&page=1';
// $access_link = 'http://www.xiziquan.com/index.php?r=web/thread&v=4.0&tid=3400017&onlyreply=0&page=1';
// $access_link = 'http://testbbs.xizi.com/api/app/index.php?r=web/thread&v=3.5&tid=1467&onlyreply=1&page=1';

$data_params = [
    'params' => [
        'tid' => 3400017,
        'onlyreply' => 0,
        'page' => 1
    ]
];

$data_params = json_encode($data_params);