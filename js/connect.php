<?php
    //connect and select the database
//     $connect = mysql_connect("localhost","root","") or die('Database Not Connected. Please Fix the Issue! ' . mysql_error());
 //   mysql_select_db("jsondb", $connect);
 //
     // get the contents of the JSON file
//$results = file_get_contents('php://input');

//Decode the JSON string and convert it into a PHP associative array.
//$data = json_decode($_POST['sender.data'], true);
$obj = $_POST['myData'];
     //Fetch the details of Student


    //Insert the fetched Data into Database
    $query = "INSERT INTO results()
    VALUES()";

     if(!mysql_query($query,$connect))
    {
        die('Error : Query Not Executed. Please Fix the Issue!  ' . mysql_error());
    }
     else{
            echo "Data Inserted Successully!!!";
     }
?>

