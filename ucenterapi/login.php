<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenterapi/login&v=4.0';
$access_link = 'http://www.xiziquan.com/index.php?r=UcenterApi/login&v=4.0';
// $access_link = 'http://localhost/bbs/dev/api/app/index.php?r=UcenterApi/login&v=4.0';
// $access_link = 'http://testbbs.xizi.com/api/app/index.php?r=UcenterApi/login&v=4.0';
$data_params = [
	'params' => [
		'username' => 'skorn',
        // 'password' => '55e292b74654f314f17dcc2990caba52bcb0a2d8cf27cd51da99a797d7145bf7e8f6538e28b4380886583ab658fc07f0',
        'password' => 'e15fd2c6aea12473b5290c56d8c50e17867e6f4f42eace425deb48496d0ae28c7c9c193eee26fbaa04a0cc8a90fd3018',
		// 'api_ticket' => 'cckdgve0cahtcrl6h25o739fp3',
        // 'code' => '211050',
        // 'login_type' => 'mobile'
	]
];

$data_params = json_encode($data_params);