<?php 

    include "../partials/connect.php";

    if(isset($_POST['update'])) {
        $new_id = $_POST['form_id'];
        $new_name = $_POST['name'];
        $new_price = $_POST['price'];
        $new_description = $_POST['description'];
        $new_category = $_POST['category'];

        $target = "uploads/";
        $file_path = $target.basename($_FILES['file']['name']);
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_store = "../uploads/".$file_name;

        move_uploaded_file($file_tmp, $file_store);

        $sql = "UPDATE products SET name = '$new_name', price = '$new_price', description = '$new_description', category_id = '$new_category', picture = '$file_path' WHERE id='$new_id'";

        if(mysqli_query($connect, $sql)) {
            header('location: products_display.php');
        } else {
            header('location: admin_index.php');
        }
    }

?>