<?php
require_once("conection.php");

session_start();

$cusid = isset($_SESSION['id']) ? $_SESSION['id'] : NULL;

if(!isset($cusid)){
    header("location:home.php");
    exit;
}

$sql = "SELECT * FROM dishqueue WHERE cusid=$cusid;";
$result = mysqli_query($conn, $sql);
//
function component($name, $vendor, $process){
    if($process == 1){
        $text = "Ready!";
        $element = "
        <tr>
            <td>$name</td>
            <td>$vendor</td>
            <td style=\"color:#33CC33;\">$text</td>
        </tr>
    ";
    } 
    else{
        $text = "Processing..";
        $element = "
        <tr>
            <td>$name</td>
            <td>$vendor</td>
            <td style=\"color:#FF0000;\">$text</td>          
        </tr>
    ";
    } 
    echo $element;
}
?>


<html lang="en">
<head>
    <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">

        <link rel="stylesheet" href="styles.css" />
        <!--<script src="store.js" async></script>-->     


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-family: Georgia, Garamond, Serif;
        text-color: blue;
        font-style: bold;

        }

        td, th {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 8px;
        text-color: #111111;
        }

        /* tr:nth-child(even) {
        background-color: #dddddd;
        } */
    </style> -->
    
<style type="text/css">
.myTable { 
    background-color:#0000011;
    border-collapse:collapse;
    font-family:Georgia, Garamond, Serif;
    color:black; }
.myTable th { 
    width:100%;
    font:bold 18px/1.1em Arial, Helvetica, Sans-Serif;
    text-shadow: 1px 1px 4px black;
    letter-spacing:0.3em;
    background-color:#222222;
    color:white; 
    }
.myTable td, .myTable th { 
    padding:5px;
    border:3px solid #DDDDDD;
    color: white;
    width: 15em;
    font-size: 1.5em;
    }
.myTable td { 
    line-height:2.5em; 
    width: 15em;
    }
</style>
</head>
<body>
    <?php
        require_once("header.php");
    ?>
    <div class="shop-items">
            <table class="myTable">
                <tr>
                    <th>Dishname</th>
                    <th>Vendor</th>
                    <th>Status</th>
                </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {   
                    $name = $row['dishname'];
                    $vendor = $row['vendor'];
                    $process = $row['process'];
                    component($name, $vendor, $process);
                }
              }   else {
                  echo "<h1>No food is processing</h1>";
              }
            ?>
    </div>
    
</body>
</html>