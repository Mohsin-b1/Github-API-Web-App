<?php

// Creates curl session

$headers = [
    "User-Agent: Mohsin-b1",
    "Authorization: token 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"
];

$ch = curl_init("https://api.github.com/repositories");






curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true

]);

return $ch;
