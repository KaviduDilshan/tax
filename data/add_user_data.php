<?php

include '../conn.php';

$date = date("Y-m-d");
$ful_name = $_POST["full_name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$user_type = $_POST["user_type"]; 

$sql = "INSERT INTO user(f_name,mobile,email,reg_date,user_type) "
    . "VALUES(\"$ful_name\",\"$mobile\",\"$email\",\"$date\",\"$user_type\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

    if($user_type == "person"){
        header('Location: ../form.php?cu_id=' . $last_id);
    }
    

}