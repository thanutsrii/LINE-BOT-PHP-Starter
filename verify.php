<?php
$access_token = 'Z6NyX29IxFJ25piJh1hrccHeccT96KFuiukdikWeb87UKKu5CleVm+2LBWsUx5h/s46iyLN3bK5y7hiAE8AjEXZ8axdtg+94qtlN+fB/SCNYWYJf9R5871aB5MdYAF688KLuHjdGdjRK8h5Hs9klIgdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:W8B1EissNtwSwyk';

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
