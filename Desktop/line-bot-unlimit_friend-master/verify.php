<?php
$access_token = '4Pfhqlaj0OYnzWEdFI1jVqOkO8QSw587Qzp+MFSQPndu1/AZdMx5Lm/xAuxt73ymMeJOf5OffP43+v9yVgpiPCLa7fQQcNVUatx9L1Nj6KRQASazeYqzhdEkuDC9k9ts6Bm+EAuUJCTODgAxpr/P+wdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
