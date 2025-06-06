<?php

include '../conn.php';

$date = date("Y-m-d");
$ful_name = $_POST["full_name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$sql = "INSERT INTO user(full_name,mobile,email,reg_date) "
    . "VALUES(\"$ful_name\",\"$mobile\",\"$email\",\"$date\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

    header('Location: ../form.php?cu_id=' . $last_id);

}