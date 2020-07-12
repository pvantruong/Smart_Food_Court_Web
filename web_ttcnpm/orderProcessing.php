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

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="shop-items">
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    
                            $name = $row['dishname'];
                            $vendor = $row['vendor'];
                            $process = $row['process'];
            ?>
                    
                    
                        <div class="cart-item cart-column">
                                    <div class="cart-item-title"><?php echo $name ?></div>
                                    <span class="cart-item-title"><?php echo $vendor ?></span>
                                    <span class="cart-item-title"><?php if($process == 1) {echo "<h4>~~READY~~</h4>";} else{echo "<h4>Processing...</h4>";} ?></span>
                        </div>

    
            <?php
                }
              }   else {
                  echo "No food is processing";
              }
            ?>
    </div>
    
</body>
</html>