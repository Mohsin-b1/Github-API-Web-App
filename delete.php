<?php

$ch = require "init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/{$_GET['full_name']}");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch);

$data = json_decode($response, true);

if ($status_code !== 204) {

    echo "Unexpected status code: $status_code";
    var_dump($data);
    exit;
}

require_once("buttonController.php");
require_once("Views/delete.phtml");

?>
