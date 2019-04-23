<?php


$access_token = '2xrbcTrUtlgTgJWoFAitjR/v3wiyK2yWTP++h0vDajTc7wS9o2a5BFvFcczIei28seSPnD5INk85XDlGsYGZMFDWfESpyg50MfGgk0f7BD05iJFdhRYh6fEi+mM+k42EQJVFsNVM2CJzF3sNWqhFjwdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue12fab23d245e4c56d678be6e55a33f1';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

