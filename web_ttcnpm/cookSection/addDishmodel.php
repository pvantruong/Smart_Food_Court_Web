<?php
header("location:cookHome.php");
require("conection.php");


$name = isset($_POST['name']) ? $_POST['name'] : '';
$vendor = isset($_POST['vendor']) ? $_POST['vendor'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$image = "images/no-image.png";
$avb = 0;

$sql = "INSERT INTO menu (dishname, vendor, price, Avb, img)
VALUES ('$name', '$vendor', '$price', '$avb', '$image')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "add dish successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location:addDishmodel.php");
}

mysqli_close($conn);
?>