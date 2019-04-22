<?php
echo '<script>console.log("Your stuff here")</script>';

$json = (file_get_contents("php://input"));

 $obj = json_decode($json,true);
 echo '$test';
 

header("Content-Type: application/json; charset=UTF-8")


$servername = "127.0.0.1";
$username = "root";
$password = "password";
$dbname = "arc";

/* Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/

//
$connection = mysql_connect($servername, $username, $password,$dbname);
mysql_query("set names 'utf8'");
if (!$connection) {
    die("could not connect to the database.\n" . mysql_error());
}else {
    mysql_select_db(“$dbname”);
}


$Age = .$obj->q1.; 
$Race_Ethnicity = .$obj->q2.;
$International_Student = .$obj->q3.;
$Sexual_Orientation = .$obj->q4.;
$Year_Of_School = .$obj->q5.;
$Participations  = .$obj->q6.;
$Living_Situation  = .$obj->q7.;
$Question1_SH = .$obj->q7.;
$Question2_SH = .$obj->q7.;
$Question3_SH = .$obj->q7.;
$Question4_SH = .$obj->q7.;
$Question5_SH = .$obj->q7.;
$Question6_SH = .$obj->q7.;
$Question7_SH = .$obj->q7.;
$Question8_SH = .$obj->q7.;
$Question9_SH = .$obj->q7.;
$Question10_SH = .$obj->q7.;
$Question11_SH = .$obj->q7.;
$Question12_SH = .$obj->q7.;
$Question13_SH = .$obj->q7.;
$Question14_SH = .$obj->q7.;
$Question15_SH = .$obj->q7.;
$Question16_SH = .$obj->q7.;
$F_Up_Question1_SH = .$obj->q9.;
$F_Up_Question2_SH = .$obj->q10.;
$F_Up_Question3_SH = .$obj->q11.;
$F_Up_Question4_SH = .$obj->q12.;
$F_Up_Question5_SH = .$obj->q13.;



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
