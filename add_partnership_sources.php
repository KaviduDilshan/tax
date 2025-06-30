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
            <h4 style="color:#28282b;"><?= $customer["partnership_name"]; ?> / <?= date("Y-m-d") ?>
                <hr>
            </h4>
        </div>

        <form action="data/add_partnership_tax.php" method="post" class="mb-3">
            <input type="text" name="c_id" id="c_id" class="pt-2 pb-2" value="<?= $c_id; ?>" hidden />
            <input type="text" name="date" id="date" class="pt-2 pb-2" value="<?= date("Y-m-d"); ?>" hidden />
            <input type="text" class="pt-2 pb-2 tot_er" name="t_year" id="t_year" value="2025/2026" hidden />

            <div class="row  mt-3">
                <h2 class="mb-1">Tax Year : <strong
                        style="color:black"><?= date("Y") . " / " . date("Y", strtotime("+1 year")); ?></strong></h2>
            </div>

            <div class="row  mt-3">
                <h4 class="mb-1">Business Profit</h4>
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="pt-2 pb-2 tot_er" name="b_profit" id="b_profit" placeholder="0.00" />
                </div>
            </div>

            <div class="row  mt-3">
                <h4 class="mb-1">Total Tax Payble</h4>
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
            var b_profit = parseFloat($("#b_profit").val());

            if (!isNaN(b_profit)) {
                var tax = b_profit * 0.06;
                $("#total_tax").val(tax.toFixed(2));
            } else {
                $("#total_tax").val("0.00");
            }
        });
    </script>

</body>

</html>