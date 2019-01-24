<?php
$access_token = 'dyuFNK6Tn+mKBvmemo9CVbadTbv2XvE20aBUfrClqCMiiQZTGmG3VH1zx0J1w9GhtN7gT8wEUXV+M/ixNVF/BO2kytQYpgtxGgzpTmzM3TZadiG4VjdMIx23LqV3oERl1M2yb8B90qpENd/7vC14dAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
