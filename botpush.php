<?php



require "vendor/autoload.php";

$access_token = '2xrbcTrUtlgTgJWoFAitjR/v3wiyK2yWTP++h0vDajTc7wS9o2a5BFvFcczIei28seSPnD5INk85XDlGsYGZMFDWfESpyg50MfGgk0f7BD05iJFdhRYh6fEi+mM+k42EQJVFsNVM2CJzF3sNWqhFjwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'Ue12fab23d245e4c56d678be6e55a33f1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







