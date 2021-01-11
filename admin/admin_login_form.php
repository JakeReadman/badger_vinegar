<?php 

    session_start();

    include "admin_partials/head.php";

    if(isset($_POST['login'])) {
        include "../partials/connect.php";

        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admins WHERE username = '$email' AND password = '$password'";
        $results = $connect->query($sql);
        $final = $results->fetch_assoc();

        $_SESSION['email'] = $final['username'];
        $_SESSION['password'] = $final['password'];

        if($email = $final['username'] AND $password = $final['password']) {
            header('location: admin_index.php');
        } else {
            header('location: admin_login_form.php');
        }
    }

?>

<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Admin Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="admin_login_form.php" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="login">Sign in</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>