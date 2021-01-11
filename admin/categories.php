<!DOCTYPE html>
<html>

<?php 
    include "admin_partials/session.php";
    include "admin_partials/head.php";
?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include "admin_partials/header.php" ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include "admin_partials/aside.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <form role="form" action="category_handler.php" method="post">
                            <h1>Categories</h1>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category">Categories</label>
                                    <input type="text" class="form-control" id="category" placeholder="Enter category"
                                        name="name">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include "admin_partials/footer.php" ?>
</body>

</html>