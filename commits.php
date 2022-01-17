<?php
$view = new stdClass();
$view->pageTitle = 'show';

$full_name = $_GET["full_name"];

$ch = require "init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);


curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name/commits");
$response = curl_exec($ch);
curl_close($ch);
$commitData = json_decode($response, true);

foreach($commitData as $value):
    $commit = $value['commit'];
    $author = $commit['author'];
    // var_dump($commit['author']);
    //var_dump($author['name']);
endforeach;


//var_dump($full_name);
//var_dump($data);

require_once("buttonController.php");
require_once("Views/commits.phtml");


?>

