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

                        <?php 
                            include "../partials/connect.php";

                            $id = $_GET['pro_id'];
                            $sql = "SELECT * FROM products where id = '$id'";
                            $result = $connect->query($sql);
                            $final = mysqli_fetch_assoc($result);

                        ?>

                        <h3>Name : <?php echo $final['name'] ?></h3>
                        <hr><br>
                        <h3>Price : <?php echo $final['price'] ?></h3>
                        <hr><br>
                        <h3>Description : <?php echo $final['description'] ?></h3>
                        <hr><br>
                        <img src="../<?php echo $final['picture'] ?>" alt="No file" style="height:300px; width:300px">



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