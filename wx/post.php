<?php
#$access_link = 'http://192.168.1.91:9999/api/app/index.php?r=home/attention&v=3.0';
// $access_link = 'http://www.xiziquan.com/index.php?r=home/attention&v=3.6&debug=1208';
// $access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=home/attention&v=4.1';
$access_link = 'http://localhost/pwbbs2014/wx_post.php?action=cklogin';
$data_params = [
	'params' => [
		'fid' => 1,
		'token' => '4d9aeeOvnyLZO6n+/Me146pLPMOqmMusD3r3AxZLLZ+eaT+uPRvjHEWFaIzIOrWl2iXDE8y+Y859Rh89PQ',
	]
];

$data_params = json_encode($data_params);
