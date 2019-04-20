<?php

$json = (file_get_contents("php://input"));

 $obj = json_decode($json,true);

header("Content-Type: application/json; charset=UTF-8")


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "arc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Age = $obj [0][1]; 
$Race_Ethnicity
$International_Student
$Sexual_Orientation
$Year_Of_School
$Participations
$Living_Situation
$Question1_SH
$Question2_SH
$Question3_SH
$Question4_SH
$Question5_SH
$Question6_SH
$Question7_SH
$Question8_SH
$Question9_SH
$Question10_SH
$Question11_SH
$Question12_SH
$Question13_SH
$Question14_SH
$Question15_SH
$Question16_SH
$F_Up_Question1_SH
$F_Up_Question2_SH
$F_Up_Question3_SH
$F_Up_Question4_SH
$F_Up_Question5_SH



$sql = "INSERT INTO results ( Age, Race_Ethnicity, International_Student, Sexual_Orientation,
 Year_Of_School, Participations, Living_Situation, Question1_SH, Question2_SH, Question3_SH,
 Question4_SH, Question5_SH, Question6_SH, Question7_SH, Question8_SH, Question9_SH,
 Question10_SH, Question11_SH, Question12_SH, Question13_SH, Question14_SH, Question15_SH, Question16_SH,
 F_Up_Question1_SH, F_Up_Question2_SH, F_Up_Question3_SH, F_Up_Question4_SH, F_Up_Question5_SH)
 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
) ;"

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL Error";
} else {
    //bind paramaters to the placeholders
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssss", $Age, $Race_Ethnicity, $International_Student, $Sexual_Orientation,
    $Year_Of_School, $Participations, $Living_Situation, $Question1_SH, $Question2_SH, $Question3_SH,
    $Question4_SH, $Question5_SH, $Question6_SH, $Question7_SH, $Question8_SH, $Question9_SH,
    $Question10_SH, $Question11_SH, $Question12_SH, $Question13_SH, $Question14_SH, $Question15_SH, $Question16_SH,
    $F_Up_Question1_SH, $F_Up_Question2_SH, $F_Up_Question3_SH, $F_Up_Question4_SH, $F_Up_Question5_SH
     );
     mysqli_stmt_execute($stmt);
}




 ?>
