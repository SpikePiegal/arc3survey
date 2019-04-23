<?php
    // Convert string to array in this function
    function arrayToString($arr) {
        $string = "";
        // Check if array or string
        if (is_array($arr)) {
            $string = implode(",", $arr);
            return $string;
        } else {
            $string = $arr;
            return $string;
        }
    }

    // POST Data from ajax request
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $data = $_POST["data"];
        $values = json_decode($data, true);

        $servername = "127.0.0.1";
        $username = "arcuser";
        $password = "password";
        $dbname = "arc3";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $Age = $values['q1'];
        $Race_Ethnicity = arrayToString($values['q2']);
        $International_Student = $values['q3'];
        $Sexual_Orientation = $values['q4'];
        $Year_Of_School = $values['q5'];
        $Participations  = arrayToString($values['q6']);
        $Living_Situation  = $values['q7'];


        $Question1_SH = isset($values["q8"]['Treated you “differently” because of your sex?']) ? $values["q8"]['Treated you “differently” because of your sex?'] : "";
        $Question2_SH = isset($values["q8"]['Displayed, used, or distributed sexist or suggestive materials?']) ? $values["q8"]['Displayed, used, or distributed sexist or suggestive materials?'] : "";
        $Question3_SH = isset($values["q8"]['Made offensive sexist remarks?']) ? $values["q8"]['Made offensive sexist remarks?'] : "";
        $Question4_SH = isset($values["q8"]['Put you down or was condescending to you because of your sex?']) ? $values["q8"]['Put you down or was condescending to you because of your sex?'] : "";
        $Question5_SH = isset($values["q8"]['Repeatedly told sexual stories or jokes that were offensive to you?']) ? $values["q8"]['Repeatedly told sexual stories or jokes that were offensive to you?'] : "";
        $Question6_SH = isset($values["q8"]['Made unwelcome attempts to draw you into a discussion of sexual matters?']) ? $values["q8"]['Made unwelcome attempts to draw you into a discussion of sexual matters?'] : "";
        $Question7_SH = isset($values["q8"]['Made offensive remarks about your appearance, body, or sexual activities?']) ? $values["q8"]['Made offensive remarks about your appearance, body, or sexual activities?'] : "";
        $Question8_SH = isset($values["q8"]['Made gestures or used body language of a sexual nature which embarrassed or offended you?']) ? $values["q8"]['Made gestures or used body language of a sexual nature which embarrassed or offended you?'] : "";
        $Question9_SH = isset($values["q8"]['Made unwanted attempts to establish a romantic sexual relationship with you despite your efforts to discourage it?']) ? $values["q8"]['Made unwanted attempts to establish a romantic sexual relationship with you despite your efforts to discourage it?'] : "";
        $Question10_SH = isset($values["q8"]['Touched you in a way that made you feel uncomfortable?']) ? $values["q8"]['Touched you in a way that made you feel uncomfortable?'] : "";
        $Question11_SH = isset($values["q8"]['Made unwanted attempts to stroke, fondle, or kiss you?']) ? $values["q8"]['Made unwanted attempts to stroke, fondle, or kiss you?'] : "";
        $Question12_SH = isset($values["q8"]['Made you feel like you were being bribed with a reward to engage in sexual behavior?']) ? $values["q8"]['Made you feel like you were being bribed with a reward to engage in sexual behavior?'] : "";
        $Question13_SH = isset($values["q8"]['Made you feel threatened with some sort of retaliation for not being sexually cooperative?']) ? $values["q8"]['Made you feel threatened with some sort of retaliation for not being sexually cooperative?'] : "";
        $Question14_SH = isset($values["q8"]['Treated you badly for refusing to have sex?']) ? $values["q8"]['Treated you badly for refusing to have sex?'] : "";
        $Question15_SH = isset($values["q8"]['Implied better treatment if you were sexually cooperative?']) ? $values["q8"]['Implied better treatment if you were sexually cooperative?'] : "";

        $Question16_SH = "";

        $F_Up_Question1_SH = arrayToString($values['q9']);
        $F_Up_Question2_SH = $values['q10'];
        $F_Up_Question3_SH = $values['q11'];
        $F_Up_Question4_SH = $values['q12'];
        $F_Up_Question5_SH = arrayToString($values['q13']);

        // Run the sql query with data
        $sql = "INSERT INTO results (Age, Race_Ethnicity, International_Student, Sexual_Orientation, Year_Of_School, Participations, Living_Situation, Question1_SH, Question2_SH, Question3_SH, Question4_SH, Question5_SH, Question6_SH, Question7_SH, Question8_SH, Question9_SH, Question10_SH, Question11_SH, Question12_SH, Question13_SH, Question14_SH, Question15_SH, Question16_SH, F_Up_Question1_SH, F_Up_Question2_SH, F_Up_Question3_SH, F_Up_Question4_SH, F_Up_Question5_SH)       
                VALUES ('".$Age."', '".$Race_Ethnicity."', '".$International_Student."', '".$Sexual_Orientation."', '".$Year_Of_School."', '".$Participations."', '".$Living_Situation."', '".$Question1_SH."', '".$Question2_SH."', '".$Question3_SH."', '".$Question4_SH."', '".$Question5_SH."', '".$Question6_SH."', '".$Question7_SH."', '".$Question8_SH."', '".$Question9_SH."', '".$Question10_SH."', '".$Question11_SH."', '".$Question12_SH."', '".$Question13_SH."', '".$Question14_SH."', '".$Question15_SH."', '".$Question16_SH."', '".$F_Up_Question1_SH."', '".$F_Up_Question2_SH."', '".$F_Up_Question3_SH."', '".$F_Up_Question4_SH."', '".$F_Up_Question5_SH."')";

        $conn->query($sql);
        $conn->close();
    }
?>
