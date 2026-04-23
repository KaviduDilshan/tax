<?php
include 'conn.php';
$c_id = base64_decode($_GET["cu_id"]);
$customer = mysqli_fetch_assoc(mysqli_query($con, "SELECT f_name,mobile FROM user WHERE c_id = $c_id"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/income.css" type="text/css" />
    <title>Calculate your tax with HAT ACCOUNTANTS</title>
</head>

<body>

    <div class="containe">
        <div class="text-end mt-3">
            <h4 style="color:#28282b;"><?= $customer["f_name"]; ?> / <?= date("Y-m-d") ?>
                <hr>
            </h4>
        </div>
        <form action="data/add_person_tax.php" method="post" class="mb-3">
            <input type="text" name="c_id" class="pt-2 pb-2" placeholder="0.00" value="<?= $c_id; ?>" hidden />
            <input type="text" name="past_yer" class="pt-2 pb-2" placeholder="0.00"
                value="<?= date("Y", strtotime("-1 year")) . " / " . date("Y"); ?>" hidden />
            <input type="text" name="new_yer" class="pt-2 pb-2" placeholder="0.00"
                value="<?= date("Y") . " / " . date("Y", strtotime("+1 year")); ?>" hidden />
            <h2>Input Income Sources</h2>
            <div class="row mt-2">
                <div class="col-half">
                    <h5 class=""><?= date("Y", strtotime("-1 year")) . " / " . date("Y"); ?></h5>
                </div>
                <div class="col-half">
                    <h5 class=""><?= date("Y") . " / " . date("Y", strtotime("+1 year")); ?></h5>
                </div>
            </div>
            <hr class="mt-0 pt-0" style="color:#575757;">
            <div class="row mt-2">
                <h4 class="mb-1">Employment / Salary</h4>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er" name="past_in1" id="past_in1" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er_n" name="new_in1" id="new_in1" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Business Net Profit</h4>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er" name="past_in2" id="past_in2" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er_n" name="new_in2" id="new_in2" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Interest Earned Gross(Without WHT)</h4>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er" name="past_in3" id="past_in3" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er_n" name="new_in3" id="new_in3" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Rent Received</h4>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er" name="past_in4" id="past_in4" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er_n" name="new_in4" id="new_in4" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Any Other(NET)</h4>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er" name="past_in5" id="past_in5" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er_n" name="new_in5" id="new_in5" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h6 class="mb-1"><b>Total Eranings</b></h6>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" name="past_er" id="past_er" placeholder="0.00"
                        readonly />
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" name="new_er" id="new_er" placeholder="0.00"
                        readonly />
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <h4 class="mb-1">You Have Agreement with CEB for Solar Energy Supply</h4>
                <div class="col-half">
                    <select name="ceb" id="ceb" class="pt-2 pb-2" style="width:100%;">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="col-half">
                    <select name="ceb_new" class="pt-2 pb-2" style="width:100%;">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
            </div>

            <h2 class="mt-4">Input Tax Payments</h2>
            <div class="row mt-2">
                <div class="col-half">
                    <h5 class=""><?= date("Y", strtotime("-1 year")) . " / " . date("Y"); ?></h5>
                </div>
                <div class="col-half">
                    <h5 class=""><?= date("Y") . " / " . date("Y", strtotime("+1 year")); ?></h5>
                </div>
            </div>
            <hr class="mt-0 pt-0" style="color:#575757;">
            <div class="row mt-2">
                <h4 class="mb-1">APIT / PAYE</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle tot_er" name="past_apit" id="past_apit"
                        placeholder="0.00" readonly />
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle tot_er_n" name="new_apit" id="new_apit"
                        placeholder="0.00" readonly />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">WHT</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 tot_er" name="past_wht" id="past_wht" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 tot_er_n" name="new_wht" id="new_wht" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Income Tax Quarterly Payments</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 tot_er" name="past_it" id="past_it" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 tot_er_n" name="new_it" id="new_it" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Rates Paid to MC</h4>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er" name="past_de1" id="past_de1" placeholder="0.00" />
                </div>
                <div class="col-half">
                    <input type="number" class="pt-2 pb-2 tot_er_n" name="new_de1" id="new_de1" placeholder="0.00" />
                </div>
            </div>
            <div class="row mt-3">
                <h6 class="mb-1"><b>Your Tax Payable Amount</b></h6>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" name="past_tot" id="past_tot" placeholder="0.00"
                        readonly />
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" name="new_tot" id="new_tot" placeholder="0.00"
                        readonly />
                </div>
            </div>
            <div class="row mt-3">
                <h6 class="mb-1"><b>Your Tax Savings Amount / %</b></h6>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle tot_er_n" id="past_tot_hi" placeholder="0.00"
                        readonly hidden />
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" name="savings" id="savings" placeholder="0.00"
                        readonly />
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" name="savings_per" id="savings_per"
                        placeholder="0.00" readonly />
                </div>
            </div>

            <div class=" row mt-3 ">
                <div class="col-6 p-2">
                    <button type="submit" class="btn  w-100">Download Report</button>
                </div>
                <div class="col-6 p-2">
                    <a href="index.php" type="reset" class="btn  w-100 p-3">cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script>
        $('.tot_er').on('input', function () {
            var past_in1 = parseFloat($("#past_in1").val());
            var past_in2 = parseFloat($('#past_in2').val());
            var past_in3 = parseFloat($('#past_in3').val());
            var past_in4 = parseFloat($('#past_in4').val());
            var past_in5 = parseFloat($('#past_in5').val());
            if (!isNaN(past_in1)) {
                past_in1 = past_in1;
            } else {
                past_in1 = 0;
            }
            if (!isNaN(past_in2)) {
                past_in2 = past_in2;
            } else {
                past_in2 = 0;
            }
            if (!isNaN(past_in3)) {
                past_in3 = past_in3;
            } else {
                past_in3 = 0;
            }
            if (!isNaN(past_in4)) {
                past_in4 = past_in4;
            } else {
                past_in4 = 0;
            }
            if (!isNaN(past_in5)) {
                past_in5 = past_in5;
            } else {
                past_in5 = 0;
            }

            var calc = past_in1 + past_in2 + past_in3 + past_in4 + past_in5;
            $("#past_er").val(calc.toFixed(2));
            if (past_in1 >= 1200000) {
                var apit = past_in1 - 1200000;
            } else {
                var apit = 0;
            }

            if (apit > 0) {
                if (apit <= 500000) {
                    var tax = apit * (6 / 100);
                    var tax2 = 0;
                    var tax3 = 0;
                    var tax4 = 0;
                    var tax5 = 0;
                    var tax6 = 0;
                } else if (apit > 500000 && apit <= 1000000) {
                    var tax = 500000 * (6 / 100);
                    var balance = apit - 500000;
                    var tax2 = balance * (12 / 100);
                    var tax3 = 0;
                    var tax4 = 0;
                    var tax5 = 0;
                    var tax6 = 0;
                } else if (apit > 1000000 && apit <= 1500000) {
                    var tax = 500000 * (6 / 100);
                    var tax2 = 500000 * (12 / 100);
                    var balance = apit - 1000000;
                    var tax3 = balance * (18 / 100);
                    var tax4 = 0;
                    var tax5 = 0;
                    var tax6 = 0;
                } else if (apit > 1500000 && apit <= 2000000) {
                    var tax = 500000 * (6 / 100);
                    var tax2 = 500000 * (12 / 100);
                    var tax3 = 500000 * (18 / 100);
                    var balance = apit - 1500000;
                    var tax4 = balance * (24 / 100);
                    var tax5 = 0;
                    var tax6 = 0;
                } else if (apit > 2000000 && apit <= 2500000) {
                    var tax = 500000 * (6 / 100);
                    var tax2 = 500000 * (12 / 100);
                    var tax3 = 500000 * (18 / 100);
                    var tax4 = 500000 * (24 / 100);
                    var balance = apit - 2000000;
                    var tax5 = balance * (30 / 100);
                    var tax6 = 0;
                } else if (apit > 2500000) {
                    var tax = 500000 * (6 / 100);
                    var tax2 = 500000 * (12 / 100);
                    var tax3 = 500000 * (18 / 100);
                    var tax4 = 500000 * (24 / 100);
                    var tax5 = 500000 * (30 / 100);
                    var balance = apit - 2500000;
                    var tax6 = balance * (36 / 100);
                }
                var apitval = tax + tax2 + tax3 + tax4 + tax5 + tax6;
                $("#past_apit").val(apitval.toFixed(2));
            } else {
                var apitval = 0;
                $("#past_apit").val(apitval.toFixed(2));
            }
            if (calc > 1200000) {
                var tax_pay = 1200000;
            } else {
                var tax_pay = 0;
            }
            $("select[name='ceb']").change(function () {
                var ceb = parseInt($(this).val());
                if (ceb == 1) {
                    var solar_pay = 600000;
                } else {
                    var solar_pay = 0;
                }
            });
            var past_de1 = parseFloat($('#past_de1').val());
            if (!isNaN(past_de1)) {
                past_de1 = past_de1;
            } else {
                past_de1 = 0;
            }

            var r = past_in4 * (25 / 100);
            if (calc > 1200000) {
                var tot = calc - (tax_pay + past_de1 + r);
            } else {
                var tot = 0;
            }

            var past_wht = parseFloat($("#past_wht").val());
            var past_it = parseFloat($('#past_it').val());
            if (!isNaN(past_wht)) {
                past_wht = past_wht;
            } else {
                past_wht = 0;
            }
            if (!isNaN(past_it)) {
                past_it = past_it;
            } else {
                past_it = 0;
            }

            if (tot <= 500000) {
                var dtax = tot * (6 / 100);
                var dtax2 = 0;
                var dtax3 = 0;
                var dtax4 = 0;
                var dtax5 = 0;
                var dtax6 = 0;
            } else if (tot > 500000 && tot <= 1000000) {
                var dtax = 500000 * (6 / 100);
                var balance = tot - 500000;
                var dtax2 = balance * (12 / 100);
                var dtax3 = 0;
                var dtax4 = 0;
                var dtax5 = 0;
                var dtax6 = 0;
            } else if (tot > 1000000 && tot <= 1500000) {
                var dtax = 500000 * (6 / 100);
                var dtax2 = 500000 * (12 / 100);
                var balance = tot - 1000000;
                var dtax3 = balance * (18 / 100);
                var dtax4 = 0;
                var dtax5 = 0;
                var dtax6 = 0;
            } else if (tot > 1500000 && tot <= 2000000) {
                var dtax = 500000 * (6 / 100);
                var dtax2 = 500000 * (12 / 100);
                var dtax3 = 500000 * (18 / 100);
                var balance = tot - 1500000;
                var dtax4 = balance * (24 / 100);
                var dtax5 = 0;
                var dtax6 = 0;
            } else if (tot > 2000000 && tot <= 2500000) {
                var dtax = 500000 * (6 / 100);
                var dtax2 = 500000 * (12 / 100);
                var dtax3 = 500000 * (18 / 100);
                var dtax4 = 500000 * (24 / 100);
                var balance = tot - 2000000;
                var dtax5 = balance * (30 / 100);
                var dtax6 = 0;
            } else if (tot > 2500000) {
                var dtax = 500000 * (6 / 100);
                var dtax2 = 500000 * (12 / 100);
                var dtax3 = 500000 * (18 / 100);
                var dtax4 = 500000 * (24 / 100);
                var dtax5 = 500000 * (30 / 100);
                var balance = tot - 2500000;
                var dtax6 = balance * (36 / 100);
            }

            var tax_after_ded = dtax + dtax2 + dtax3 + dtax4 + dtax5 + dtax6;
            $("#past_tot_hi").val(tax_after_ded.toFixed(2));

            var payble = tax_after_ded - (apitval + past_wht + past_it);
            if (payble > 0) {
                $("#past_tot").val(payble.toFixed(2));
            } else {
                var ttt = 0;
                $("#past_tot").val(ttt.toFixed(2));
            }
        });
        // -----------------------------------------------------------------------------------

        $('.tot_er_n').on('input', function () {
            var new_in1 = parseFloat($("#new_in1").val());
            var new_in2 = parseFloat($('#new_in2').val());
            var new_in3 = parseFloat($('#new_in3').val());
            var new_in4 = parseFloat($('#new_in4').val());
            var new_in5 = parseFloat($('#new_in5').val());
            if (!isNaN(new_in1)) {
                new_in1 = new_in1;
            } else {
                new_in1 = 0;
            }
            if (!isNaN(new_in2)) {
                new_in2 = new_in2;
            } else {
                new_in2 = 0;
            }
            if (!isNaN(new_in3)) {
                new_in3 = new_in3;
            } else {
                new_in3 = 0;
            }
            if (!isNaN(new_in4)) {
                new_in4 = new_in4;
            } else {
                new_in4 = 0;
            }
            if (!isNaN(new_in5)) {
                new_in5 = new_in5;
            } else {
                new_in5 = 0;
            }
            var calc2 = new_in1 + new_in2 + new_in3 + new_in4 + new_in5;
            $("#new_er").val(calc2.toFixed(2));

            if (new_in1 >= 1800000) {
                var apit2 = new_in1 - 1800000;
            } else {
                var apit2 = 0;
            }

            if (apit2 > 0) {
                if (apit2 <= 1000000) {
                    var ntax = apit2 * (6 / 100);
                    var ntax3 = 0;
                    var ntax4 = 0;
                    var ntax5 = 0;
                    var ntax6 = 0;
                } else if (apit2 > 1000000 && apit2 <= 1500000) {
                    var ntax = 1000000 * (6 / 100);
                    var balance2 = apit2 - 1000000;
                    var ntax3 = balance2 * (18 / 100);
                    var ntax4 = 0;
                    var ntax5 = 0;
                    var ntax6 = 0;
                } else if (apit2 > 1500000 && apit2 <= 2000000) {
                    var ntax = 1000000 * (6 / 100);
                    var ntax3 = 500000 * (18 / 100);
                    var balance2 = apit2 - 1500000;
                    var ntax4 = balance2 * (24 / 100);
                    var ntax5 = 0;
                    var ntax6 = 0;
                } else if (apit2 > 2000000 && apit2 <= 2500000) {
                    var ntax = 1000000 * (6 / 100);
                    var ntax3 = 500000 * (18 / 100);
                    var ntax4 = 500000 * (24 / 100);
                    var balance2 = apit2 - 2000000;
                    var ntax5 = balance2 * (30 / 100);
                    var ntax6 = 0;
                } else if (apit2 > 2500000) {
                    var ntax = 1000000 * (6 / 100);
                    var ntax3 = 500000 * (18 / 100);
                    var ntax4 = 500000 * (24 / 100);
                    var ntax5 = 500000 * (30 / 100);
                    var balance2 = apit2 - 2500000;
                    var ntax6 = balance2 * (36 / 100);
                }
                var apitval2 = ntax + ntax3 + ntax4 + ntax5 + ntax6;
                $("#new_apit").val(apitval2.toFixed(2));

            } else {
                var apitval2 = 0;
                $("#new_apit").val(apitval2.toFixed(2));
            }

            if (calc2 >= 1800000) {
                var ntax_pay = 1800000;
            } else {
                var ntax_pay = 0;
            }

            $("select[name='ceb_new']").change(function () {
                var nceb = parseInt($(this).val());
                if (nceb == 1) {
                    var nsolar_pay = 600000;
                } else {
                    var nsolar_pay = 0;
                }
            });

            var new_de1 = parseFloat($('#new_de1').val());
            if (!isNaN(new_de1)) {
                new_de1 = new_de1;
            } else {
                new_de1 = 0;
            }

            var nr = new_in4 * (25 / 100);
            if (calc2 > 1800000) {
                var ntot = calc2 - (ntax_pay + new_de1 + nr);
            } else {
                var ntot = 0;
            }

            var new_wht = parseFloat($("#new_wht").val());
            var new_it = parseFloat($('#new_it').val());
            if (!isNaN(new_wht)) {
                new_wht = new_wht;
            } else {
                new_wht = 0;
            }
            if (!isNaN(new_it)) {
                new_it = new_it;
            } else {
                new_it = 0;
            }

            if (ntot <= 1000000) {
                var dntax = ntot * (6 / 100);
                var dntax3 = 0;
                var dntax4 = 0;
                var dntax5 = 0;
                var dntax6 = 0;
            } else if (ntot > 1000000 && ntot <= 1500000) {
                var dntax = 1000000 * (6 / 100);
                var balance2 = ntot - 1000000;
                var dntax3 = balance2 * (18 / 100);
                var dntax4 = 0;
                var dntax5 = 0;
                var dntax6 = 0;
            } else if (ntot > 1500000 && ntot <= 2000000) {
                var dntax = 1000000 * (6 / 100);
                var dntax3 = 500000 * (18 / 100);
                var balance2 = ntot - 1500000;
                var dntax4 = balance2 * (24 / 100);
                var dntax5 = 0;
                var dntax6 = 0;
            } else if (ntot > 2000000 && ntot <= 2500000) {
                var dntax = 1000000 * (6 / 100);
                var dntax3 = 500000 * (18 / 100);
                var dntax4 = 500000 * (24 / 100);
                var balance2 = ntot - 2000000;
                var dntax5 = balance2 * (30 / 100);
                var dntax6 = 0;
            } else if (ntot > 2500000) {
                var dntax = 1000000 * (6 / 100);
                var dntax3 = 500000 * (18 / 100);
                var dntax4 = 500000 * (24 / 100);
                var dntax5 = 500000 * (30 / 100);
                var balance2 = ntot - 2500000;
                var dntax6 = balance2 * (36 / 100);
            }

            var ntax_after_ded = dntax + dntax3 + dntax4 + dntax5 + dntax6;
            var payble2 = ntax_after_ded - (apitval2 + new_wht + new_it);
            if (payble2 > 0) {
                $("#new_tot").val(payble2.toFixed(2));
            } else {
                var ttt = 0;
                $("#new_tot").val(ttt.toFixed(2));
            }

            var past_tot_hi = parseFloat($('#past_tot_hi').val());
            if (!isNaN(past_tot_hi)) {
                past_tot_hi = past_tot_hi;
            } else {
                past_tot_hi = 0;
            }

            $("#savings").val(ntax_after_ded - past_tot_hi.toFixed(2));
            var prt = (ntax_after_ded - past_tot_hi) / (ntax_after_ded / 100);
            if (prt < 0) {
                prt_ex = 0.00;
            } else {
                prt_ex = prt;
            }
            $("#savings_per").val(prt_ex.toFixed(2));

        });
    </script>

</body>

</html>