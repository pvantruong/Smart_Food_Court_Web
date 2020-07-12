<?php
require_once("conection.php");

$sql = "SELECT * FROM dishqueue ORDER BY priority ASC";
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
        <section class="container content-section">
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      
                            $name = $row['dishname'];
                            $cusname = $row['cusname'];
                            $time = $row['priority'];
            ?>
                        
                            <form action="./dequeue.php" method="post">
                                <div class="cart-item cart-column">
                                    <div class="cart-item-title"><?php echo $name ?></div>
                                    <span class="cart-item-title"><?php echo $cusname ?></span>
                                    <span class="cart-item-title"><?php echo $time ?></span>
                                    <input type="hidden" value=<?php echo $row['id'] ?> name="id">
                                    <button class="btn btn-primary shop-item-button" type="submit">Finished</button>
                                </div>
                            </form>
                       
                        
            <?php
                
                    }
              }   else {
                  echo "No order is need to process";
              }
            ?>
        </section>  
    </div>
    
</body>
</html>