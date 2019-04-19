<?php

$json = json_decode(file_get_contents("php://input"));
$categories = $json->categories;

header("Content-Type: application/json; charset=UTF-8")



$jsonFile="CityInfo.json";
$jsondata = file_get_contents($jsonFile);
$data = json_decode($jsondata, true);

$array_data = $data['CityInfo'];

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "yourDB";

// Create connection
$conn = new mysqli($localhost, $username, $password, $yourDB);
$link = mysql_connect('localhost', 'username', 'password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
 // update

/* $json = file_get_contents("php://input");


//test test
$data = json_decode($json, true);

var_dump($data); */

 ?>
