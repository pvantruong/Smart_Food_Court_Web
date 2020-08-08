<?php
require("conection.php");
//session_start();
$vendorr = $_SESSION['vendorr'];
$sql = "SELECT * FROM menu  WHERE vendor='$vendorr'";
$result3 = mysqli_query($conn, $sql);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />
    <link rel="stylesheet" href="../toggleButton.css" />
</head>
<body>
    <div class="shop-items">
        
            <?php
            if (mysqli_num_rows($result3) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result3)) {
                            $name = $row['dishname'];
                            $vendor = $row['vendor'];
                            $price = $row['price'];
            ?>
                            <div class="shop-item">
                                    <span class="shop-item-title"><?php echo $name?></span>
                                    <span class="shop-item-title"><?php echo $vendor?></span>
                                    <img class="shop-item-image" src="../<?php echo $row['img']?>" >
                                <div class="shop-item-details">
                                    <span class="shop-item-price"><?php echo $price?></span>
                                    <label class="switch">
                                        <input type="checkbox" name="<?php echo $row['id']?>" value="yes" <?php if($row['Avb'] == 1){echo "Checked";} ?>>
                                        <span class="slider round"></span>
                                        <h3>Enable</h3>
                                    </label>
                                </div>
                            </div>
            <?php
                    }
              }   else {
                  echo "No food is available";
              }
            ?>

    </div>
    
</body>
</html>