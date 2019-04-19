<?php

$json = json_decode(file_get_contents("php://input"));
$categories = $json->categories;

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



 ?>
