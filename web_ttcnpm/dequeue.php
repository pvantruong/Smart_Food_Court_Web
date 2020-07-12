<?php

require_once("conection.php");


$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM `dishqueue` WHERE `dishqueue`.`id` = '$id'";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "dequeue dish successfully";
    header("location:orderCook.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location:dequeue.php");
}

mysqli_close($conn);
?>