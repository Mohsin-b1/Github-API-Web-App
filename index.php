<?php

$view = new stdClass();
$view->pageTitle = 'Homepage';

$ch = require("init_curl.php");

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repositories");


$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

require_once("buttonController.php");
require_once("Views/index.phtml");


