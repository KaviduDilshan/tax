<?php
include 'conn.php';
$c_id = base64_decode($_GET["cu_id"]);
$customer = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE c_id = $c_id"));
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
        <div class="text-end mt-2">
            <h4 style="color:#28282b;"><?= $customer["corporate_name"]; ?> / <?= date("Y-m-d") ?>
                <hr>
            </h4>
        </div>
        <form action="data/add_corporate_tax.php" method="post" class="mb-3">
            <input type="text" name="c_id" id="c_id" class="pt-2 pb-2" value="<?= $c_id; ?>" hidden />
            <input type="text" name="date" id="date" class="pt-2 pb-2" value="<?= date("Y-m-d"); ?>" hidden />

            <div class="row  mt-3">
                <h2 class="mb-1">Tax Year</h2>
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="pt-2 pb-2 tot_er" name="t_year" id="t_year" placeholder="2025/2026" />
                </div>
            </div>

            <div class="row  mt-3">
                <h2 class="mb-1">Sector</h2>
                <div class="col-12">
                    <select class="pt-2 pb-2 tot_er" name="sector" id="sector" style="width:100%;">
                        <option value="1">Genaral Corporate</option>
                        <option value="2">Liker & Wine</option>
                        <option value="3">Forign Services</option>
                    </select>
                </div>
            </div>

            <div class="row  mt-3">
                <h2 class="mb-1">Business Profit</h2>
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="pt-2 pb-2 tot_er" name="b_profit" id="b_profit" placeholder="0.00" />
                </div>
            </div>

            <div class="row mt-3">
                <h2 class="mb-1">Total Tax Payble</h2>
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="pt-2 pb-2 tot_er" name="total" id="total_tax" placeholder="0.00"
                        readonly />
                </div>
            </div>

            <div class=" row mt-3 ">
                <div class="col-6 p-2">
                    <button type="submit" class="btn  w-100">Download Report</button>
                </div>
                <div class="col-6 p-2">
                    <button type="submit" class="btn  w-100">cancel</button>
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
            var b_profit = parseFloat($("#b_profit").val());
            var sector = $("#sector").val();

            if (!isNaN(b_profit)) {
                var tax = 0;

                if (sector == "1") {
                    tax = b_profit * 0.30;
                } else if (sector == "2") {
                    tax = b_profit * 0.40;
                } else if (sector == "3") {
                    tax = b_profit * 0.15;
                }

                $("#total_tax").val(tax.toFixed(2));
            } else {
                $("#total_tax").val("0.00");
            }
        });


        $('#sector').on('change', function () {
            $("#b_profit").trigger('input');
        });
    </script>
</body>
</html>