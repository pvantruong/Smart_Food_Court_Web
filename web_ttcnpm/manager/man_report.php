<?php
require("conection.php");
require_once ('man_component.php');
session_start();


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
        border: 2px solid #dddddd;
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

    
        <?php 
            $sql = "SELECT * FROM report ORDER BY vendor ASC";
            $result = mysqli_query($conn, $sql);
            $sum = 0;
            $temp = NULL;
            while ($row = mysqli_fetch_assoc($result)){
                if($temp != $row['vendor']){
        ?>          
                    <?php
                    if($temp != NULL){  ?>
                        <tr>
                            <th>Sum:</th> 
                            <th></th>
                            <th><?php echo $sum ?></th>
                        </tr>
                    </table>
             <?php  $sum = 0;
                    }         ?>  
                    <h4>Report of vendor: <?php echo $row['vendor'] ?></h4> 
                    <table>
                        <tr>
                            <th>Dishname</th>
                            <th>Time</th>
                            <th>Value</th>
                        </tr>
        <?php
                    $temp = $row['vendor'];
                }
                component($row['dishname'], $row['price'], $row['time']);
                $sum += $row['price']; 
            }
        ?>
                <tr>
                <th>Sum:</th> 
                <th></th>
                <th><?php echo $sum ?></th>
            </tr>
            
    

    </body>
</html>