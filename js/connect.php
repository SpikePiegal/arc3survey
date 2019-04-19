<?php

$json = json_decode(file_get_contents("php://input"));
$categories = $json->categories;

header("Content-Type: application/json; charset=UTF-8")
$obj = json_decode($_GET["dataString"], false);
/* $json = file_get_contents("php://input");



$data = json_decode($json, true);

var_dump($data); */

 ?>
