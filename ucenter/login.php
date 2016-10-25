<?php
// $access_link = 'http://192.168.1.91:9999/api/app/index.php?r=ucenter/login&v=1.1';
$access_link = 'http://localhost/bbs/dev/api/app/index.php?r=ucenter/login&v=1.1';

$data_params = [
	'params' => [
		'username' => 'test111',
		'password' => 'fdc71de42b86bc35589554fd3384675c5117768d319152e6b6b996dcce50860be153697ff192760f3408e40d6131fea2'
	]
];

$data_params = json_encode($data_params);