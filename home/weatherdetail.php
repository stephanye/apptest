<?php
$access_link = 'http://localhost/pwbbs2014/api/app/index.php?r=home/weatherdetail&v=4.2.1';
// $access_link = 'http://testbbs.xizi.com/api/app/index.php?r=home/weatherdetail&v=4.2.1';
$rand = rand(1,10);
$data_params = [
	'params' => [
		'fid' => 90
	]
];

$data_params = json_encode($data_params);
