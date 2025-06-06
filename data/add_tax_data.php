<?php

include '../conn.php';

$tin_number = $_POST("tin_number");
$income = $_POST["income"];
$expences = $_POST["expences"];
$tax_amount = $_POST["tax_amount"];
$descripyion = $_POST["descripyion"];
$image = $_POST["screenshot"];
$pdf = $_POST["pdf_file"];
$exel = $_POST["excel_file"];
$sql = "INSERT INTO user(tin_number,income,expences,tax_amount,descripyion,images,pdfs,exels) "
    . "VALUES(\"$tin_number\",\"$income\",\"$email\",\"$date\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);

    header('Location: ../form.php?cu_id=' . $last_id);

}