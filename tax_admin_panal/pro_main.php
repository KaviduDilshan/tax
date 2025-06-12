<?php
session_start();
include '../valid_fun.php';
if (isset($_SESSION["type"]) && isset($_SESSION["id"])) {
    include '../dbconnect.php';
    $se_type = $_SESSION["type"];
    ?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
            <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
            <meta name="author" content="pixelstrap">
            <title>FAMILIAR POS - Product List</title>
            <link rel="icon" href="../../assets/images/favi.png" type="image/x-icon">
            <link rel="shortcut icon" href="../../assets/images/favi.png" type="image/x-icon">
            <!-- Google font-->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
            <!-- Font Awesome-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/fontawesome.css">
            <!-- ico-font-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/icofont.css">
            <!-- Themify icon-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/themify.css">
            <!-- Flag icon-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/flag-icon.css">
            <!-- Feather icon-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/feather-icon.css">
            <!-- Plugins css start-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/sweetalert2.css">
            <!-- Plugins css Ends-->
            <!-- Bootstrap css-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/select2.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/datatables.css">
            <!-- App css-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
            <link id="color" rel="stylesheet" href="../../assets/css/color-1.css" media="screen">
            <!-- Responsive css-->
            <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">

            <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.dataTables.min.css">
            <link rel="stylesheet" type="text/css" href="../../assets/css/buttons.dataTables.min.css">
            <style>
                .zoom {
                    padding: 0px;
                    transition: transform .2s;
                    margin: 0 auto;
                }

                .zoom:hover {
                    -ms-transform: scale(3.5); /* IE 9 */
                    -webkit-transform: scale(3.5); /* Safari 3-8 */
                    transform: scale(3.5);
                }
            </style>
        </head>
        <body>
            <!-- Loader starts-->
            <div class="loader-wrapper">
                <div class="theme-loader">    
                    <div class="loader-p"></div>
                </div>
            </div>
            <!-- Loader ends-->
            <!-- page-wrapper Start-->
            <div class="page-wrapper" id="pageWrapper">
                <!-- Page Header Start-->
                <?php include '../top_navi_1.php' ?>
                <!-- Page Header Ends                              -->
                <!-- Page Body Start-->
                <div class="page-body-wrapper horizontal-menu">
                    <!-- Page Sidebar Start-->
                    <?php include '../main_navi_1.php' ?>
                    <!-- Page Sidebar Ends-->
                    <div class="page-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header pb-0">
                                            <h5>System Registered Items</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="form-label"><strong>Category</strong></label>
                                                    <input class="form-control searchPro" id="cat" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label"><strong>Product Name</strong></label>
                                                    <input class="form-control searchPro" id="pName" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label"><strong>From Barcode</strong></label>
                                                    <input class="form-control searchPro" id="bar" type="text">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="table">
                                                <table class="display" id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>Code</th>
                                                            <th>Product Name</th>
                                                            <th>Category</th>
                                                            <th>Quantity</th>
                                                            <th>Dealer Price</th>
                                                            <th>Unit Price</th>
                                                            <th>GP % / Rs.</th>
                                                            <th style="width: 8%;">Action</th>
                                                        </tr>
                                                        <tr id="sea_gif_row" style="display:none;">
                                                            <td colspan="8">
                                                                <img src="../img/search.gif" id="sea_gif">
                                                            </td> 
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tb_body">
                                                        <?php
                                                        $query = "SELECT * FROM products ORDER BY pro_id DESC";
                                                        $result = mysqli_query($con, $query);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $pro_id = $row["pro_code"];
                                                            $cat_id = $row["cate_code"];
                                                            $category = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `category` WHERE `cat_code`=\"$cat_id\""));
                                                            $pro_p_re = mysqli_query($con, "SELECT * FROM `product_price` WHERE `pro_code`=\"$pro_id\"");
                                                            $delear_p_txt = $sell_p_txt = $w_sell_p_txt = "";
                                                            while ($pro_p_row = mysqli_fetch_array($pro_p_re)) {
                                                                $delear_p_txt .= $pro_p_row["dealer_price"] . ",";
                                                                $sell_p_txt .= $pro_p_row["selling_price"] . ", ";
                                                                $w_sell_p_txt .= $pro_p_row["dis_price"] . ", ";
                                                            }
                                                            $pp_re = mysqli_query($con, "SELECT * FROM `product_price` WHERE `pro_code`='" . $pro_id . "'");
                                                            $qty_txt = "";
                                                            while ($pp_row = mysqli_fetch_array($pp_re)) {
                                                                $qty_txt .= $pp_row["selling_price"] . "-" . $pp_row["quantity"] . ",<br>";
                                                            }
                                                            $pro_bar = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `barcode` WHERE `pro_code`=\"$pro_id\""));
                                                            ?>
                                                            <tr>
                                                                <td><?= $pro_id ?></td>
                                                                <td><?= $row["product_name"] ?></td>
                                                                <td><?= $category["name"] ?></td>
                                                                <td><?= $qty_txt ?></td>
                                                                <td><?= $delear_p_txt ?></td>
                                                                <td><?= $sell_p_txt ?> <br> <?= $w_sell_p_txt ?></td>
                                                                <td>Rs. <?= $row["gp_rs"] ?> | <?= $row["gp_pre"] ?></td>
                                                                <td>
                                                                    <a href="edit_pro.php?p=<?= encrydata($row["pro_id"]) ?>" class="btn btn-square btn-secondary btn-xs" type="button"><i class="fa fa-edit"></i></a>
                                                                    <a href="../data/del_pro.php?pro=<?= encrydata($row["pro_id"]) ?>" class="btn btn-square btn-danger btn-xs" type="button"><i class="fa fa-trash-o"></i></a>
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
                    <!-- footer start-->
                    <?php include '../inc/footer.php' ?>
                </div>
            </div>
        </body>
        <script src="../../assets/js/jquery-3.5.1.min.js"></script>
        <!-- feather icon js-->
        <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- Sidebar jquery-->
        <script src="../../assets/js/sidebar-menu.js"></script>
        <script src="../../assets/js/config.js"></script>

        <script src="../../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
        <script src="../../assets/js/datatable/datatables/datatable.custom.js"></script>
        <script src="../../assets/js/tooltip-init.js"></script>

        <!-- Bootstrap js-->
        <script src="../../assets/js/bootstrap/popper.min.js"></script>
        <script src="../../assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="../../assets/js/tooltip-init.js"></script>
        <!-- Plugins JS start-->

        <script src="../../assets/js/sweet-alert/sweetalert.min.js"></script>

        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../../assets/js/script.js"></script>


        <script src="../../assets/js/jquery-3.5.1.js"></script>
        <script src="../../assets/js/jquery.dataTables.min.js"></script>
        <script src="../../assets/js/dataTables.buttons.min.js"></script>
        <script src="../../assets/js/jszip.min.js"></script>
        <script src="../../assets/js/pdfmake.min.js"></script>
        <script src="../../assets/js/vfs_fonts.js"></script>
        <script src="../../assets/js/buttons.html5.min.js"></script>
        <script src="../../assets/js/select2/select2.full.min.js"></script>
        <script src="../../assets/js/select2/select2-custom.js"></script>
        <script src="../js/base_fun.js"></script>
        <script src="../js/ajax_search.js"></script>
        <script>
            $(document).ready(function () {
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
    </html>
    <?php
} else {
    header("location:../");
}