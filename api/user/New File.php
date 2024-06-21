<?php
    $myCurl = curl_init();
curl_setopt_array($myCurl, array(
    CURLOPT_URL => 'http://192.168.1.11:45267/api/user/profilePrepare.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array("user_id" => "1"))
));
$response = curl_exec($myCurl);
curl_close($myCurl);

echo "Ответ на Ваш запрос: ".$response;
?>