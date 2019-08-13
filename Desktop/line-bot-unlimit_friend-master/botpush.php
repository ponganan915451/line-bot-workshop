<?php



require "vendor/autoload.php";

$access_token = '*4Pfhqlaj0OYnzWEdFI1jVqOkO8QSw587Qzp+MFSQPndu1/AZdMx5Lm/xAuxt73ymMeJOf5OffP43+v9yVgpiPCLa7fQQcNVUatx9L1Nj6KRQASazeYqzhdEkuDC9k9ts6Bm+EAuUJCTODgAxpr/P+wdB04t89/1O/w1cDnyilFU=*';

$channelSecret = '*b108e42c29b0ab1ccb8b1c06b96db8f8*';
// ID ที่ต้องการส่งไปหา
$pushID = '*U2a20b1921b22a045bdf10e56df93d40e*';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







