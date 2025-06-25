<?php

include '../conn.php';

$corporate_name = $_POST["corporate_name"];
$ful_name = $_POST["full_name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$corporate_tin_number = $_POST["corporate_tin_number"];
$date = date("Y-m-d");
$user_type = $_POST["user_type"]; 

$sql = "INSERT INTO user(corporate_name,f_name,mobile,email,corporate_tin_num,reg_date,user_type) "
    . "VALUES(\"$corporate_name\",\"$ful_name\",\"$mobile\",\"$email\",\"$corporate_tin_number\",\"$date\",\"$user_type\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

    if($user_type == 3){
        header('Location: ../add_corporate_sources.php?cu_id=' . base64_encode($last_id));
    }

}