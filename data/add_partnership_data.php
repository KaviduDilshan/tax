<?php

include '../conn.php';

$Partnership_name = $_POST["Partnership_name"];
$ful_name = $_POST["full_name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$Partnership_tin = $_POST["Partnership_tin"];
$date = date("Y-m-d");
$user_type = $_POST["user_type"]; 

$sql = "INSERT INTO user(partnership_name,f_name,mobile,email,partnership_tin_num,reg_date,user_type) "
    . "VALUES(\"$Partnership_name\",\"$ful_name\",\"$mobile\",\"$email\",\"$Partnership_tin\",\"$date\",\"$user_type\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

    if($user_type == 2){
        header('Location: ../add_partnership_sources.php?cu_id=' . base64_encode($last_id));
    }

}