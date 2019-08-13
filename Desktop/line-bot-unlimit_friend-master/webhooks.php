<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '4Pfhqlaj0OYnzWEdFI1jVqOkO8QSw587Qzp+MFSQPndu1/AZdMx5Lm/xAuxt73ymMeJOf5OffP43+v9yVgpiPCLa7fQQcNVUatx9L1Nj6KRQASazeYqzhdEkuDC9k9ts6Bm+EAuUJCTODgAxpr/P+wdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$text2 = '';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text']."\n".$event['source']['userId']."\n";
			// Get replyToken
			$text2 = $text;
		}
	}
}
require "vendor/autoload.php";
$channelSecret = 'b108e42c29b0ab1ccb8b1c06b96db8f8';
$pushID = 'U2a20b1921b22a045bdf10e56df93d40e';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";
