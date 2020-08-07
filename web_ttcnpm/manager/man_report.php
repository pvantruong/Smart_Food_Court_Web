<?php
require("conection.php");
require_once ('man_component.php');
session_start();

$sql = "SELECT * FROM report";
$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Report - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <!--<script src="store.js" async></script>-->     
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
    </head>
    <body>
        
        <?php require_once ("man_header.php"); ?>
       
        
        <h2>BK Food Court Report</h2>

        <table>
        <tr>
            <th>Dishname</th>
            <th>Vendor</th>
            <th>Time</th>
        </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result)){
                component($row['dishname'], $row['vendor'], $row['time']);
            }
        ?>
        </table>
     
    

    </body>
</html>