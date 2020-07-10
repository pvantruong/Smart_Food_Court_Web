<?php

    header("location:home.php");
    require("conection.php");
   
    $id = isset($_POST['dish']) ? $_POST['dish'] : '';

    echo $id;
    $sql_s ="SELECT * FROM menu WHERE id = '$id'";
    $result = mysqli_query($conn, $sql_s);

    $row = mysqli_fetch_assoc($result);
    $dishname = $row['dishname'];
    $cusID = 1;
    $cusname = "nguyenvi";
    $price = $row["price"];

    

    $sql = "INSERT INTO dishqueue (dishname, cusID, cusname, price) VALUES ('$dishname', '$cusID', '$cusname', '$price')";
         
        if (mysqli_multi_query($conn, $sql)) {
        echo "registeration successfully";
         } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
    exit;
?>