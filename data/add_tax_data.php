<?php

include '../conn.php';

$c_id = $_POST["c_id"];
$past_yer = $_POST["past_yer"];
$new_yer = $_POST["new_yer"];
$p_emp_slary = $_POST["past_in1"];
$p_bis_net = $_POST["past_in2"];
$p_inter_ern = $_POST["past_in3"];
$p_rent_recived = $_POST["past_in4"];
$p_any_other = $_POST["past_in5"];
$p_total_ern  = $_POST["past_er"];
$p_apit_paye  = $_POST["past_apit"];
$p_wht = $_POST["past_wht"];
$p_income_tax = $_POST["past_it"];
$p_rates_paid = $_POST["past_de1"];
$p_tax_pay = $_POST["past_tot"];
$p_tax_sav = $_POST["savings"];

$n_emp_slary = $_POST["new_in1"];
$n_bis_net = $_POST["new_in2"];
$n_inter_ern = $_POST["new_in3"];
$n_rent_recived = $_POST["new_in4"];
$n_any_other = $_POST["new_in5"];
$n_total_ern = $_POST["new_er"];
$n_apit_paye  = $_POST["new_apit"];
$n_wht = $_POST["new_wht"];
$n_income_tax = $_POST["new_it"];
$n_rates_paid = $_POST["new_de1"];
$n_tax_pay     = $_POST["new_tot"];
$n_tax_sav = $_POST["savings_per"];

$ceb = $_POST["ceb"];
$ceb_new = $_POST["ceb_new"];

$sql = "INSERT INTO tax (
    c_id, past_yer, new_yer, p_emp_slary, p_bis_net, p_inter_ern, p_rent_recived, p_any_other, p_total_ern, p_apit_paye, p_wht, p_income_tax, p_rates_paid, p_tax_pay, p_tax_sav,
    n_emp_slary, n_bis_net, n_inter_ern, n_rent_recived, n_any_other, n_total_ern, n_apit_paye, n_wht, n_income_tax, n_rates_paid, n_tax_pay, n_tax_sav,
    ceb, ceb_new)"
    . "VALUES(\"$c_id\",\"$past_yer\",\"$new_yer\",\"$p_emp_slary\",\"$p_bis_net\",\"$p_inter_ern\",\"$p_rent_recived\",\"$p_any_other\",\"$p_total_ern\",\"$p_apit_paye\",\"$p_wht\",\"$p_income_tax\",\"$p_rates_paid\",\"$p_tax_pay\",\"$p_tax_sav\",
                \"$n_emp_slary\",\"$n_bis_net\",\"$n_inter_ern\",\"$n_rent_recived\",\"$n_any_other\",\"$n_total_ern\",\"$n_apit_paye\",\"$n_wht\",\"$n_income_tax\",\"$n_rates_paid\",\"$n_tax_pay\",\"$n_tax_sav\",
                \"$ceb\",\"$ceb_new\")";

if (mysqli_query($con, $sql)) {
    $last_id = mysqli_insert_id($con);
    header('Location: ../popup.php?cu_id=' . base64_encode($last_id));
}
