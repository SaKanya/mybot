<?php
$access_token = 'SxnYghzwhTkWql547+VWuFl3FrRWkSGjkbecRVuG9yYribIxbxOo3pHHjuQw6up6T7VmKMtFpRQBr91Htz+O4yDxTNZzygCePRkf1XIrAvd1q4T54eWUA8thf6FNG49Bh1Zl/cuQJbhPvplO8pK4zAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>