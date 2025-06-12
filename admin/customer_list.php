<title>Customer List</title>
<?php
include_once './top_header.php';
include_once './data/data_list.php';
?>
<body class="hold-transition sidebar-mini">

    <?php
    if (isset($_GET['error'])) {
        $error = base64_decode($_GET['error']);
        echo '<script>  error_by_code(' . $error . ');</script>';
    }
    ?>    
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once './navbar.php'; ?> 
        <?php include_once './sidebar.php'; ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Customer List</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Customer List</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                                <div class="card-header">

                                    <h3 class="card-title" >
                                        <div class="row">
                                            <div class="col6">
                                                <button  type="button" class="btn btn-app" onclick="location.href = 'customer.php';"><i class="fas fa-user"></i>Add New Customer</button>
                                            </div >
                                        </div>
                                    </h3>
                                </div> 
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Opening Balance</th>
                                            <th style="width:3%; text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Opening Balance</th>
                                            <th style="width:3%; text-align: center;">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($result_customer_list)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><img src="img/cus_imgs/<?= $row['image'] ?>" alt="" width="50"/></td>
                                                <td><?php echo $row['customer_name']; ?></td>
                                                <td><?php echo $row['customer_mobile']; ?></td>
                                                <td><?php echo $row['customer_address']; ?></td>
                                                <td><?php
                                                    if ($row['customer_status'] == 1) {
                                                        echo 'Active';
                                                    } else {
                                                        echo 'Not Active';
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php                                                
                                                    $deb = get_db_opening_balce($row['c_id'], $conn);
                                                    $cre = get_cr_opening_balce($row['c_id'], $conn);
                                                    if ($deb == 0) {
                                                        echo 'Rs. - ' . $cre;
                                                    } elseif ($deb > 0) {
                                                        echo 'Rs. ' . $deb;
                                                    } else {
                                                        echo '0.00';
                                                    }
                                                    ?></td>
                                                <td>
                                                    <a href="customer.php?c_id=<?php echo base64_encode($row['c_id']); ?>" class="btn btn-block btn-outline-success btn-flat"><i class="fa fa-check "></i></a>
                                                </td>   
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include_once './control-sidebar.php'; ?>
        <!-- /.content-wrapper -->
        <?php include_once './footer.php'; ?>
    </div>
</body>
</html>
