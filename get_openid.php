<?php

$id = $_POST('code');

$curl = curl_init();
$url = "https://api.weixin.qq.com/sns/jscode2session?appid=APPID&secret=SECRET&js_code=" + $id + "JSCODE&grant_type=authorization_code";

curl_setopt($curl, CURLOPT_URL, $url);

$data = curl_exec($curl);

echo($data);

?>
