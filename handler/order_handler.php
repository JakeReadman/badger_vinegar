<?php
    
    session_start();
    include "../partials/connect.php";

    $total = $_POST['total'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $customer_id = $_SESSION['customer_id'];

    $sql = "INSERT INTO orders(customer_id, address, phone, total_amount) VALUES ('$customer_id', '$address', '$phone', '$total')";
    
    $connect->query($sql);

    $sql2 = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
    $result = $connect->query($sql2);
    $final = $result->fetch_assoc();
    $order_id = $final['id'];

    foreach ($_SESSION['cart'] as $key => $value) {
        $product_id = $value['item_id'];
        $quantity = $value['quantity'];

        $sql3 = "INSERT INTO order_details(order_id, product_id, quantity) VALUES ('$order_id', '$product_id', '$quantity')";

        $connect->query($sql3);
    }

    echo "<script>alert('Order Successfully Placed');
            window.location.href='../index.php';
        </script>"

?>