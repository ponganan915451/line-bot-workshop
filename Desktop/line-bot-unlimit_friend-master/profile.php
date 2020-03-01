<?php


$access_token = 'Afo8zUgJ7K0QubM/xHG9ARBFpfbYazrA+qQeTw2IOVu08ocNtv3xDAOKGr8dTFf1MWah0rDlnbPzyMDWMm2kAfG/qxUsQ/2aEl4wpJp88zevg7QOKtDHnsAhel1cDNclspWDNKRYUII+bz9qXrw/tAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uf766acb5203083ee5200c108a6d27e83';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

