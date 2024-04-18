<?php

$utf8 = mb_convert_encoding($result, 'UTF-8');
$json = json_encode($utf8, JSON_UNESCAPED_UNICODE);

if ($json) {
    echo $json;
} else {
    echo "json_encode() failed. Reason: " . json_last_error_msg();
}