<?php

$view = new stdClass();
$view->pageTitle = 'Search';

if (isset($_POST["searchbtn"])) {
    $search = $_POST["searchTerm"];


    $ch = require "init_curl.php";

    curl_setopt($ch, CURLOPT_URL, "https://api.github.com/search/repositories?q=\"$search\"");
    //echo "https://api.github.com/search/repositories?q=\"$search\"";
    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true);
    //var_dump($data);



}


require_once("buttonController.php");
require_once("Views/search.phtml");




