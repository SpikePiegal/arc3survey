<?php

$json = (file_get_contents("php://input"));

 $obj = json_decode($json,true);
 print_r($json);
 print_r($obj);

 function consoleLogs($data) {
    $html = "";
    $coll;
    if (is_array($data) || is_object($data)) {
        $coll = json_encode($data);
    } else {
        $coll = $data;
    }
    $html = "<script>console.log('PHP: ".$coll."');</script>";
    echo($html);
}

consoleLogs(array("test1", "test2"));

debug_to_console( "Test" ); 

debug_to_console($obj);
 print_r("hello");
 echo "<script>console.log('" . json_encode($json) . "');</script>";
 echo "<script>console.log('" . $obj . "');</script>";
 echo "<script>console.log('" . '$obj' . "');</script>";
 var_dump('Hello');
 var_dump($obj);
 var_dump($json);
header("Content-Type: application/json; charset=UTF-8")


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*
$sql = INSERT INTO `arc`.`results`
(`Result_ID`,
`Age`,
`Race_Ethnicity`,
`International_Student`,
`Sexual_Orientation`,
`Year_Of_School`,
`Participations`,
`Living_Situation`,
`Question1_SH`,
`Question2_SH`,
`Question3_SH`,
`Question4_SH`,
`Question5_SH`,
`Question6_SH`,
`Question7_SH`,
`Question8_SH`,
`Question9_SH`,
`Question10_SH`,
`Question11_SH`,
`Question12_SH`,
`Question13_SH`,
`Question14_SH`,
`Question15_SH`,
`Question16_SH`,
`Time_SH_1stQuestions`,
`F_Up_Question1_SH`,
`F_Up_Question2_SH`,
`F_Up_Question3_SH`,
`F_Up_Question4_SH`,
`F_Up_Question5_SH`,
`Student_ID`,
`Survey_ID`,
`Time_SH_2nQuestions`)


VALUES
(<{Result_ID: }>,
<{Age: }>,
<{Race_Ethnicity: }>,
<{International_Student: }>,
<{Sexual_Orientation: }>,
<{Year_Of_School: }>,
<{Participations: }>,
<{Living_Situation: }>,
<{Question1_SH: }>,
<{Question2_SH: }>,
<{Question3_SH: }>,
<{Question4_SH: }>,
<{Question5_SH: }>,
<{Question6_SH: }>,
<{Question7_SH: }>,
<{Question8_SH: }>,
<{Question9_SH: }>,
<{Question10_SH: }>,
<{Question11_SH: }>,
<{Question12_SH: }>,
<{Question13_SH: }>,
<{Question14_SH: }>,
<{Question15_SH: }>,
<{Question16_SH: }>,
<{Time_SH_1stQuestions: }>,
<{F_Up_Question1_SH: }>,
<{F_Up_Question2_SH: }>,
<{F_Up_Question3_SH: }>,
<{F_Up_Question4_SH: }>,
<{F_Up_Question5_SH: }>,
<{Student_ID: }>,
<{Survey_ID: }>,
<{Time_SH_2nQuestions: }>);

*/

 ?>
