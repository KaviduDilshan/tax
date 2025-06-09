<?php
include_once './session.php';
include_once '../common.php';
include_once '../conn.php';
include_once '../inc/functions.php';
include_once '../inc/database.php';
include_once './data/data_list.php';
?>
<script type="text/javascript" src='http://maps.google.com/maps/api'></script>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>JMK Enterprises - Add Customer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    

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
        <link href="css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

        <script src="js/custom.min.js" type="text/javascript"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/error_list.js" type="text/javascript"></script>
        <script src="js/custom_admin.js" type="text/javascript"></script>

</head>

<body>
<?php
    if (isset($_GET['error'])) {
        $error = base64_decode($_GET['error']);
        echo '<script>  error_by_code(' . $error . ');</script>';
    }
    ?> 
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include_once './navbar.php'; ?>
        <?php include_once './sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                            <h4 class="mb-sm-0">Add Customer</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">Customer Add</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin:-1% -3% 0% -2%;">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="../uploads/user/profile/avt.png"  alt="User profile picture" class="rounded-circle avatar-xl img-thumbnail user-profile-image material-shadow" >
                                        </div>
                                        <h5 class="fs-16 mb-1 text-ceter"><?php echo $row['customer_name']; ?></h5>
                                        <p class="text-muted mb-0 text-ceter"><?php echo "Customer" ?> | <?php echo $row['customer_city']; ?></p>
                                    </div>
                                </div>
                                <div class="card-body p-1">
                                    <ul class="list-group list-group-flush  mb-0">
                                        <li class="list-group-item">
                                            <b><?php echo $row['customer_address']; ?></b>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Mobile</b> <a class="float-right"><?php echo $row['customer_mobile']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Birth Day</b> <a class="float-right"><?php echo $row['customer_birthdate']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                        <div class="col-lg-9" style="margin-left: -1%;">
                            <div class="card">
                                <div class="card-body pb-1">                                    
                                    <div class="live-preview">
                                        <form action="data/register_customer.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="update_members" >
                                            <?php
                                                if ($c_id == 0) {
                                                    echo '<input type="hidden" name="action" value="register">';
                                                } else {
                                                    echo ' <input type="hidden" name="action" value="update">';
                                                    echo ' <input type="hidden" name="c_id" value="' . $c_id . '">';
                                                }
                                                ?>
                                            
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label for="customer_name" class="form-label m-0 fw-normal">Customer Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="customer_name" class="form-control pt-1 pb-1" placeholder="Enter customer name" value="<?php echo $row['customer_name']; ?>" required>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="customer_city" class="form-label m-0 fw-normal">Customer City <span class="text-danger">*</span></label>
                                                    <input type="text" name="customer_city" id="customer_city" class="form-control pt-1 pb-1" placeholder="Enter city" value="<?php echo $row['customer_city']; ?>" required>
                                                </div>

                                                <div class="col-lg-12 mb-3">
                                                    <label for="customer_address" class="form-label m-0 fw-normal">Address <span class="text-danger">*</span></label>
                                                    <input type="text" name="customer_address" id="customer_address" class="form-control pt-1 pb-1" placeholder="Enter address" value="<?php echo $row['customer_address']; ?>" required>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="customer_mobile" class="form-label m-0 fw-normal">Mobile Number (9477777777) <span class="text-danger">*</span></label>
                                                    <input type="number" name="customer_mobile" id="customer_mobile" class="form-control pt-1 pb-1" placeholder="Enter mobile number" value="<?php echo $row['customer_mobile']; ?>" required>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="inputName2" class="form-label m-0 fw-normal">Gender</label>
                                                    <select name="customer_gender" id="customer_gender" class="form-select pt-1 pb-1">
                                                        <option value="1"<?php
                                                            if ($row['customer_gender'] == 1) {
                                                                echo 'selected';
                                                            }
                                                            ?>>Male</option>
                                                        <option value="2" <?php
                                                            if ($row['customer_gender'] == 2) {
                                                                echo 'selected';
                                                            }
                                                        ?>>Female</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="customer_birthdate" class="form-label m-0 fw-normal">Birth Day</label>
                                                    <input type="date" name="customer_birthdate" id="customer_birthdate" class="form-control pt-1 pb-1" value="<?php echo $row['customer_birthdate']; ?>">
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="customer_status" class="form-label m-0 fw-normal">Status</label>
                                                    <select name="customer_status" id="customer_status" class="form-select pt-1 pb-1">
                                                        <option value="1" <?php
                                                            if ($row['customer_status'] == 1) {
                                                                echo 'selected';
                                                            }
                                                            ?>>Active</option>
                                                        <option value="0" <?php
                                                            if ($row['customer_status'] == 0) {
                                                                echo 'selected';
                                                            }
                                                        ?>>Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="customer_status" class="form-label m-0 fw-normal">Credit Status</label>
                                                    <select name="customer_type" id="customer_status" class="form-select pt-1 pb-1">
                                                        <option value="1" <?php
                                                            if ($row['customer_type'] == 1) {
                                                                echo 'selected';
                                                            }
                                                            ?>>Credit Accept</option>
                                                        <option value="0" <?php
                                                            if ($row['customer_type'] == 0) {
                                                                echo 'selected';
                                                            }
                                                        ?>>Credit Not Accept</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="deb_amount" class="form-label m-0 fw-normal">Profile Pic</label>
                                                    <input type="file" name="cus_image" id="cus_image" class="form-control pt-1 pb-1" value="">
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="deb_amount" class="form-label m-0 fw-normal">NIC Number <span class="text-danger">*</span></label>
                                                    <input type="text" name="nic" id="cus_image" class="form-control pt-1 pb-1" placeholder="Enter nic" value="<?php echo $row['nic']; ?>" required>
                                                </div>

                                                <hr>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="deb_amount" class="form-label m-0 fw-normal">Opening Bal. (+ Debit)</label>
                                                    <input type="number" step="0.01" min="0" name="deb_amount" class="form-control pt-1 pb-1" placeholder="0.00" value="<?php echo get_db_opening_balce($c_id, $conn) ?>">
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <label for="cre_amount" class="form-label m-0 fw-normal">Opening Bal. (- Credit)</label>
                                                    <input type="text" name="company" value="1" hidden>
                                                    <input type="number" step="0.01" min="0" name="cre_amount" class="form-control pt-1 pb-1" placeholder="0.00" value="<?php echo get_cr_opening_balce($c_id, $conn) ?>">
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-3 mt-1 text-end">
                                                    <?php if ($c_id == 0) { ?>
                                                        <button type="submit" name="add_new_Submit" class="ml-1 btn btn-primary bg-gradient waves-effect waves-light w-100">Add New</button>
                                                    <?php } else { ?>
                                                        <button type="submit" class="ml-1 btn btn-success bg-gradient waves-effect waves-light w-100">Update Now</button>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-3 mt-1 text-end">
                                                    <button type="reset" class="ml-1 btn btn-warning bg-gradient waves-effect waves-light w-100">Reset</button>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>
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

    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js') ?>"></script>
    <script src=" https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="js/recordaction.js" type="text/javascript"></script>
    


    <script type="text/javascript">
        function logout() {
            swal({
                title: "Are You Sure ",
                text: "Loging Out",
                icon: "warning",
                buttons: ['No Cancel It', 'I am Sure'],
                dangerMode: true
            }).then(function (isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Log Out',
                        text: 'Thank You',
                        icon: 'success'
                    }).then(function () {
                        window.location = 'data/logout.php';
                    });
                } else {
                    swal('Cancelled', 'User Not Login Out', 'error');
                }
            });
        }
    </script>
    
    <script>
        $('#mapa_canvas').locationpicker({
            location: {
                latitude: 32.6489447,
                longitude: -16.9032874
            },
            zoom: 9,
            //radius:10,
            inputBinding: {
                latitudeInput: $('#lat_id'),
                longitudeInput: $('#long_id'),
                //radiusInput: $('#radius_id'),
                locationNameInput: $('#morada_id')
            },
            enableAutocomplete: true,
        });
    </script>
</body>

</html>