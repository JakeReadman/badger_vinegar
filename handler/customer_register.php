<?php 
    include '../partials/connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password == $password2) {
        $sql = "INSERT INTO customers(username, password) VALUES('$email', '$password')";
        $connect->query($sql);
        echo "<script>alert('Resgistration Successful');
                window.location.href='../customer_forms.php';
            </script>";
        echo "<script>alert('Passwords did not match');
                window.location.href='../customer_forms.php';
            </script>";
    }
    
?>