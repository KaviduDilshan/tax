<?php

include '../conn.php';

$c_id = $_POST["c_id"];
$date = date("Y-m-d");
$t_year = $_POST["t_year"];
$b_profit = $_POST["b_profit"];
$total = $_POST["total"];


$sql = "INSERT INTO partnership_tax (c_id,reg_date,t_year,bis_profit,total_tax)"
    . "VALUES(\"$c_id\",\"$date\",\"$t_year\",\"$b_profit\",\"$total\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

        header('Location: ../popup.php?cu_id=' . base64_encode($last_id));

}