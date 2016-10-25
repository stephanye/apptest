<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller && $action ? NULL : exit('invalid action or controller.');

$directory = $controller . DIRECTORY_SEPARATOR . $action . '.php';
file_exists($directory) ? include $directory : exit('invalid action or controller.');

$post_params = [

    //
    // 'system_type' => '2',
    // 'device' => 'SM-G9200',
    // 'po_uid' => '34276',
    // 'token' => 'f141c361b89da0f2f1d5e8255336b3fa',
    // 'im_token' => '306c2dee86a7b27e6a8ef3b4f5aeefba',
    // 'isdev' => '0',
    // 'app_id' => '1',
    // 'timestamp' => '1468550410147',
    // 'openid' => '5831c78a000dc11c0413a27745e60201',
    // 'po_token' => 'a9f21f45e2113522af1b196a56c62cdf',
    // 'xzkey' => '4f910606c2ff381c17c41cb0deb85c7e',
    // 'device_code' => 'd60f251b1c64e1de14f3a7940b3b6bd4',
    // 'uid' => '2291795',  2410070
    // 'Version' => '3.6.0',
    // 'random' => '1402db75575074aff803932fe412ab705dae15effa8e808fe9877818160c5dd962678bba777acca0938d41e74e23ce37',

    'system_type' => '2',
    'device' => 'Nexus 5X',
    'po_uid' => '34276',
    'token' => '6b9ec0015a8d6b9dee28c33db7cb0e45',
    'im_token' => '137b44fe82c1dd110c8c1eb86fabd2b3',
    'isdev' => '0',
    'app_id' => '1',
    'timestamp' => '1477303167894',
    'openid' => '5831c78a000dc11c0413a27745e60201',
    'po_token' => '78d2de40e647e0523aff8aafc8cd9c96',
    'xzkey' => 'b70b403f18cf35872ec7adb1fb2f6d99',
    'device_code' => '1bf7fe40fd4de823d16e73c6aa25d056',
    'uid' => '2265283',
    'Version' => '3.8.0',
    'random' => 'a59581278ad96630f477e5e97e1af88e73f05f1f549b2e5a13125e11f2873abd16bf38c38fc7663fc16435cdc061a8e9',
    "data" => $data_params

];




// print_r($post_params);die;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $access_link);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, FALSE);
$output = curl_exec($ch);
exit($output);
$data = json_decode($output, TRUE);

echo '<pre>';
print_r($data);
echo '</pre>';