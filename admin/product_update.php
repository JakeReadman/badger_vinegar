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
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <form role="form" action="product_update_handler.php" method="post"
                            enctype="multipart/form-data">
                            <?php 
                                $new_id = $_GET['update_id'];
                                include "../partials/connect.php";
                                $sql = "SELECT * FROM products WHERE id = '$new_id'";
                                $result = $connect->query($sql);

                                $final = $result->fetch_assoc();
                            
                            ?>
                            <h1>Products</h1>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        value="<?php echo $final['name'] ?>" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price"
                                        value="<?php echo $final['price'] ?>" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="picture">File input</label>
                                    <input type="file" id="picture" name="file" value="<?php echo $final['picture'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" class="form-control" rows="10" name="description"
                                        value="<?php echo $final['description'] ?>"><?php echo $final['description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category" name="category" value="<?php echo $final['category_id'] ?>">
                                        <?php
                                            $cat = "SELECT * FROM categories";
                                            $result = mysqli_query($connect, $cat);
                                            while($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value=$row[id]>$row[name]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <input type="hidden" name="form_id" value="<?php echo $final['id'] ?>">
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
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