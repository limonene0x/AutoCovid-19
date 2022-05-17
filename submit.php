<?php

// 网络1801的数据
$covid19_1801 = array(
    'classname' => '网络1801', 
    'totalnum' => '29', 
    'riskarea' => '0', 
    'question' => '0', 
    'alone' => '0', 
    'diagnosed' => '0'
);

// 网络1804的数据
$covid19_1804 = array(
    'classname' => '网络1804', 
    'totalnum' => '23', 
    'riskarea' => '0', 
    'question' => '0', 
    'alone' => '0', 
    'diagnosed' => '0'
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://rjsubmit.dq.91m.top/ok',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $covid19_1801,
));

$response_1801 = curl_exec($curl);

curl_close($curl);

$file = './submit.log';
$data = date('Y-m-d H:i:s') . ' LOG 1801 LOG ' . $response . PHP_EOL . PHP_EOL;
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

sleep(10); // 第二个要提交的班级延迟十秒

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://rjsubmit.dq.91m.top/ok',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $covid19_1804,
));

$response_1804 = curl_exec($curl);

curl_close($curl);

$file = './submit.log';
$data = date('Y-m-d H:i:s') . ' LOG 1804 LOG ' . $response . PHP_EOL . PHP_EOL;
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
