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
    <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <!--<script src="store.js" async></script>-->     
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <?php
        require_once("header.php");
    ?>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    
                            $name = $row['dishname'];
                            $vendor = $row['vendor'];
                            $process = $row['process'];
            ?>
                    
                    
                    <div class="container-fluid">
                    <div class="row px-5">
                    <div class="col-md-7">
                    <div class="shopping-cart">
                                    <h1 class="pt-2"><?php echo $name ?></h1>
                                    <medium class="text-secondary">Vendor: <?php echo $vendor ?></medium>
                                    <span class="cart-item-title"><?php if($process == 1) {echo "<h4 style=\"color:#FF0000;\">~~READY~~</h4>";} else{echo "<h4>Processing...</h4>";} ?></span>
                    </div>
                    </div>
                    </div>
                    </div>

    
            <?php
                }
              }   else {
                  echo "No food is processing";
              }
            ?>
    
</body>
</html>