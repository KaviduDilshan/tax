<?php
session_start();
if($_SESSION['login'] = ''){
    header('Location: ./index.php');
}
include_once './conn.php';
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

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
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <!-- User image -->
                                    <img class="rounded-circle header-profile-user" src="assets\images\avatar5.png"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">login_name</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-3">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Member</h6>
                                <div class="dropdown-divider"></div>
                                <button onclick="logout()" type="submit"
                                    class="btn btn-outline-secondary waves-effect waves-light material-shadow-none w-100 ">Sign
                                    Out</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar -->

        <!-- Main sidebar container -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <!-- <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a> -->
                <!-- Light Logo-->
                <!-- <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a> -->
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

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebardashbord" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebardashbord">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboard">Dashboard</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebardashbord">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link" data-key="t-dashboard_list">
                                            List</a>
                                    </li>
                                </ul>
                            </div>
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
                                <!-- <div class="card-header text-end">
                                    <button type="button" class="ml-1 btn btn-primary bg-gradient waves-effect waves-light" onclick="location.href = 'guarantor.php';">Add New Guarantor</button>
                                </div> -->
                                <div class="card-body" style="overflow: scroll;">
                                    <table id="example23" class="table table-striped table-bordered" data-responsive="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Full Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>TIN Number</th>
                                                <th>Employment / Salary</th>
                                                <th>Business Net Profit</th>
                                                <th>Interest Earned Gross(Without WHT)</th>
                                                <th>Rent Received</th>
                                                <th>Any Other(NET)</th>
                                                <th>Total Eranings</th>
                                                <th>Agreement with CEB</th>
                                                <th>Input Tax Payments</th>
                                                <th>APIT / PAYE</th>
                                                <th>WHT</th>
                                                <th>Income Tax Quarterly Payments</th>
                                                <th>Rates Paid to MC</th>
                                                <th>Your Tax Payable Amount</th>
                                                <th>Your Tax Savings Amount / %</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                                <tr>
                                                   <td></td> 
                                                   <td></td> 
                                                   <td></td> 
                                                   <td></td> 
                                                   <td></td> 

                                                    <td>past<br>
                                                    new</td> 
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td>
                                                    <td>past<br>
                                                    new</td> 
                                                </tr>
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

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

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
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/error_list.js" type="text/javascript"></script>
    <script src="js/custom_admin.js" type="text/javascript"></script> 
    


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
</body>

</html>