<?php
$access_token = 'uqfHHY9zTHAcyiQfV1+DkkZ0AoEX7s7Q5kIGajiJjmNOB/tzPw8p618a0qKigjWqs46iyLN3bK5y7hiAE8AjEXZ8axdtg+94qtlN+fB/SCN+XQJ8I36k6+rY3DBEWmp9blgWySt1Tsnt61gsOZ+McAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
