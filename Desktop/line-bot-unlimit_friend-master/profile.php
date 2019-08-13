<?php


$access_token = '4Pfhqlaj0OYnzWEdFI1jVqOkO8QSw587Qzp+MFSQPndu1/AZdMx5Lm/xAuxt73ymMeJOf5OffP43+v9yVgpiPCLa7fQQcNVUatx9L1Nj6KRQASazeYqzhdEkuDC9k9ts6Bm+EAuUJCTODgAxpr/P+wdB04t89/1O/w1cDnyilFU=';

$userId = 'U2a20b1921b22a045bdf10e56df93d40e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

