<?php
require_once("conection.php");

$sql = "SELECT * FROM menu";
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
        <form action="purchase.php" method='post'>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      if($row['Avb'] == 1){
                            $name = $row['dishname'];
                            $vendor = $row['vendor'];
                            $price = $row['price'];
            ?>
                            <div class="shop-item">
                           
                                    <span class="shop-item-title"><?php echo $name?></span>
                                
                                    <span><?php echo $vendor?></span>
                                    <img class="shop-item-image" src=<?php echo $row['img']?> >
                                <div class="shop-item-details">
                                    <span class="shop-item-price"><?php echo $price?></span>
                                    <button class="btn btn-primary shop-item-button" type="submit" name="dish" value=<?php echo $row['id'] ?> >ADD TO CART</button>
                                </div>
                            </div>
            <?php
                        }
                    }
              }   else {
                  echo "No food is available";
              }
            ?>
        </form>
    </div>
    
</body>
</html>