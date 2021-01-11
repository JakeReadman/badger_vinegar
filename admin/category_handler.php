<?php 

include "../partials/connect.php";

$category = $_POST['name'];

$sql = "INSERT INTO categories(name) VALUES('$category')";

$connect->query($sql);

if(!$connect->query($sql)) {
    echo "not connected";
}

header("location: products_display.php");

?>