<?php
// $access_link = 'http://192.168.1.91:9999/api/app/index.php?r=web/thread&v=4.0';
$access_link = 'http://localhost/bbs/dev/api/app/index.php?r=web/thread&v=3.6&tid=3400017&onlyreply=0&page=1';
// $access_link = 'http://www.xiziquan.com/index.php?r=web/thread&v=4.0&tid=3400017&onlyreply=0&page=1';
// $access_link = 'http://testbbs.xizi.com/api/app/index.php?r=web/thread&v=3.6&tid=3400017&onlyreply=1&page=1';
// $access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=web/thread&v=3.6&tid=3400189&randhot=idx_66_3969155';
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=web/thread&v=4.0&tid=3957577&page=4';

$data_params = [
	'params' => [
		'tid' => 3957577,
		'onlyreply' => 0,
		'page' => 4
	]
];

$data_params = json_encode($data_params);