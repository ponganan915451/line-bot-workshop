<?php



require "vendor/autoload.php";

$access_token = '*Afo8zUgJ7K0QubM/xHG9ARBFpfbYazrA+qQeTw2IOVu08ocNtv3xDAOKGr8dTFf1MWah0rDlnbPzyMDWMm2kAfG/qxUsQ/2aEl4wpJp88zevg7QOKtDHnsAhel1cDNclspWDNKRYUII+bz9qXrw/tAdB04t89/1O/w1cDnyilFU=*';

$channelSecret = '*9d8ddbbc42b54da9324d7ff41c38ae38*';
// ID ที่ต้องการส่งไปหา
$pushID = '*Uf766acb5203083ee5200c108a6d27e83*';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







