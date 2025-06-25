<?php

include '../conn.php';

$date = date("Y-m-d");
$ful_name = $_POST["full_name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$person_tin_number = $_POST["person_tin"];
$user_type = $_POST["user_type"]; 

$sql = "INSERT INTO user(f_name,mobile,email,reg_date,person_tin_number,user_type) "
    . "VALUES(\"$ful_name\",\"$mobile\",\"$email\",\"$date\",\"$person_tin_number\",\"$user_type\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

    if($user_type == 1){
        header('Location: ../add_person_sources.php?cu_id=' . base64_encode($last_id));
    }

}