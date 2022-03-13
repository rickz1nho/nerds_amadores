<?php

$ch = curl_init('https://api.twitch.tv/helix/streams?user_login=Channel_name');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Client-ID: MyClientId'
));

$data = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

if ($info['http_code'] == 200) {
    $data = json_decode($data);
    var_dump($data);
} else {
    echo 'Failed with ' . $info['http_code'];
}

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/app/repositories/UserRepository.php";


echo "--------------------------";
$repository = new UserRepository();
$repository->view(2);