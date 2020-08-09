<?php
header("location:home.php");
require("conection.php");
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$sql = "SELECT * FROM menu";
$result = mysqli_query($conn, $sql);
if (isset($_SESSION['cart'])){
    $product_id = array_column($_SESSION['cart'], 'product_id');
    while ($row = mysqli_fetch_assoc($result)){
        foreach ($product_id as $id){
            if ($row['id'] == $id){
                // cartElement($row['img'], $row['dishname'],$row['price'], $row['id'], $row['vendor']);
                // $total = $total + (int)$row['price'];
                $dishname = $row['dishname'];
                $cusID = $_SESSION['id'];
                $priority = date("h:i:s");
                $vendor = $row['vendor'];
                $price = $row['price'];
                $sql_ = "INSERT INTO dishqueue (dishname, cusID, vendor, price, priority)
VALUES ( '$dishname', '$cusID', '$vendor', '$price', '$priority')";
                $result_ = mysqli_query($conn, $sql_);
            }
        }
    }
}
unset($_SESSION['cart']);

if ($result_) {
    echo "add dish successfully";
} 

// $result = mysqli_query($conn, $sql);
// if ($result) {
//     echo "add dish successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     header("location:addDishmodel.php");
// }

mysqli_close($conn);
?>