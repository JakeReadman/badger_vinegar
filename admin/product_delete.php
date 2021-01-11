<?php 

    include "../partials/connect.php";
    $new_id = $_GET['del_id'];

    $sql = "DELETE FROM products WHERE id = '$new_id'";

    if(mysqli_query($connect, $sql)) {
        header("location: products_display.php");
    } else {
        echo "This product was not deleted";
    }

?>