<?php 

    session_start();

    if(empty($_SESSION['email'] AND $_SESSION['password'])) {
        header('location: admin_login_form.php');
    }

?>