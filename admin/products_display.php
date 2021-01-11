<!DOCTYPE html>
<html>

<?php 
    include "admin_partials/head.php";
    include "admin_partials/session.php";    
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
                    <div class="col-sm-9">
                        <a href="products.php">
                            <button class="btn btn-success">Add New</button>
                        </a>

                        <?php 
                            include "../partials/connect.php";

                            $sql = 'SELECT * FROM products';
                            $result = $connect->query($sql);

                            while($final = mysqli_fetch_assoc($result)) { ?>
                        <a href="product_show.php?pro_id=<?php echo $final['id'] ?>">
                            <h3><?php echo $final['id'] . '. ' . $final['name'] ?></h3>
                        </a>

                        <a href="product_update.php?update_id=<?php echo $final['id'] ?>">
                            <button class="btn btn-primary">Update</button>
                        </a>

                        <a href="product_delete.php?del_id=<?php echo $final['id'] ?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>

                        <?php 
                            }
                        ?>



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