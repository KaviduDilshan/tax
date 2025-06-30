<?php
session_start();
include_once './conn.php';
if ($_SESSION['login'] !== '') {
?>
    <!doctype html>
    <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
        data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

    <head>

        <meta charset="utf-8" />
        <title>HAT ACCOUNTANTS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Multipurpose Admin & Dashboard " name="description" />
        <meta content="" name="author" />


        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">

        <!-- Ionicons -->
        <link href="assets/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- Navbar -->
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <!-- Left navbar links -->
                        <div class="d-flex">
                            <button type="button"
                                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none"
                                id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                            <!-- <h4 class="px-3 fs-16 header-item vertical-menu-btn text-muted"><a href="index.php">Home</a></h4> -->
                        </div>
                        <!-- Right navbar links -->
                        <div class="d-flex align-items-center">
                            <a href="logout.php"
                                class="btn btn-outline-danger waves-effect waves-light material-shadow-none w-100 ">Sign
                                Out</a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Navbar -->

            <!-- Main sidebar container -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>
                <div id="scrollbar">
                    <div class="container-fluid mt-2">
                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">

                            <li class="nav-item ">
                                <a class="nav-link menu-link" href="personal_tax.php">
                                    <i class="ri-file-line"></i> <span data-key="t-personal_tax">Personal Tax</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link menu-link" href="partnership_tax.php">
                                    <i class="ri-file-line"></i> <span data-key="t-partnership_tax">Partnership Tax</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link menu-link" href="corporate_tax.php">
                                    <i class="ri-file-line"></i> <span data-key="t-corporate_tax">Corporate Tax</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row" style="margin:-1% -2% 0% -2%;">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body" style="overflow: scroll;">
                                        <table id="example23"
                                            class="table table-bordered table-striped align-middle text-left"
                                            style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client</th>
                                                    <th>Tin Number</th>
                                                    <th>Register Date</th>
                                                    <th style="width:10%">Years</th>
                                                    <th>Employment / Salary</th>
                                                    <th>Business Net </th>
                                                    <th>Interest Earned</th>
                                                    <th>Rent Received</th>
                                                    <th>Any Other (NET)</th>
                                                    <th>Total Earnings</th>
                                                    <th>Solar</th>
                                                    <th>APIT/PAYE</th>
                                                    <th>WHT</th>
                                                    <th>Income Tax</th>
                                                    <th>Rates to MC</th>
                                                    <th>Tax payble</th>
                                                    <th>Tax savings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $query = "SELECT * FROM tax ORDER BY t_id DESC";
                                                $result = mysqli_query($con, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $c_id = $row["c_id"];
                                                    $customer = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `c_id`=\"$c_id\" AND `user_type`=1"));
                                                ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $customer["f_name"]; ?><br><?= $customer["mobile"]; ?><br><?= $customer["email"]; ?>
                                                        </td>
                                                        <td><?= $customer["person_tin_number"] ?></td>
                                                        <td><?= $customer["reg_date"] ?></td>
                                                        <td><?= $row["past_yer"]; ?>
                                                            <hr><?= $row["new_yer"]; ?>
                                                        </td>
                                                        <td><?= number_format($row["p_emp_slary"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_emp_slary"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_bis_net"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_bis_net"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_inter_ern"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_inter_ern"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_rent_recived"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_rent_recived"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_any_other"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_any_other"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_total_ern"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_total_ern"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?php
                                                            if ($row["ceb"] == 1) {
                                                                echo 'Yes';
                                                            } else {
                                                                echo 'No';
                                                            } ?>
                                                            <hr><?php
                                                                if ($row["ceb_new"] == 1) {
                                                                    echo 'Yes';
                                                                } else {
                                                                    echo 'No';
                                                                } ?>
                                                        </td>

                                                        <td><?= number_format($row["p_apit_paye"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_apit_paye"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_wht"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_wht"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_income_tax"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_income_tax"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_rates_paid"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_rates_paid"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_tax_pay"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_tax_pay"], 2, '.', ','); ?>
                                                        </td>

                                                        <td><?= number_format($row["p_tax_sav"], 2, '.', ','); ?>
                                                            <hr>
                                                            <?= number_format($row["n_tax_sav"], 2, '.', ','); ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- App js -->
        <script src=" https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src=" https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

        <script src="assets/libs/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="assets/libs/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="assets/libs/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/datatables-init.js"></script>

        <script src="js/recordaction.js" type="text/javascript"></script>
        <script src="js/custom.min.js" type="text/javascript"></script>
        <script src="js/custom_admin.js" type="text/javascript"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            });
        </script>
    </body>

    </html>
<?php } else {
    header('Location: ./index.php');
} ?>