<?php
$access_token='84Mb06td1kt1lHte3rfwxVEreoFVDRBnkwsA7Pc0OadL2YJqDNgIwTv4Xqh7l1aVnG3/P6Vgn1DfjgTHho6ypjcszGGpvXtTfE+3/CMyNnuGVB3CGUKw0lyxPu8k1aiBUpVZQTJQL1QSaUQMeO8pnwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
