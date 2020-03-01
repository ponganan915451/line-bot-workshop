<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'Afo8zUgJ7K0QubM/xHG9ARBFpfbYazrA+qQeTw2IOVu08ocNtv3xDAOKGr8dTFf1MWah0rDlnbPzyMDWMm2kAfG/qxUsQ/2aEl4wpJp88zevg7QOKtDHnsAhel1cDNclspWDNKRYUII+bz9qXrw/tAdB04t89/1O/w1cDnyilFU=';

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
$channelSecret = '9d8ddbbc42b54da9324d7ff41c38ae38';
$pushID = 'Uf766acb5203083ee5200c108a6d27e83';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";
