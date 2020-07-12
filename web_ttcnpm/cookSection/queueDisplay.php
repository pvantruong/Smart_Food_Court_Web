<?php
require_once("conection.php");

$sql = "SELECT * FROM dishqueue ORDER BY priority ASC";
$result = mysqli_query($conn, $sql);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />

    <style>
    .button2 {background-color: #4CAF50;} /* Blue */
    </style>
</head>
<body>
    <div class="shop-items">
        <section class="container content-section">
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                      
                            $name = $row['dishname'];
                            $vendor = $row['vendor'];
                            $time = $row['priority'];
            ?>
                        
                            <form action="./dequeue.php" method="post">
                               
                                    
                                        
                                        
                                            <h1 class="pt-2"><?php echo $name ?></h1>
                                            <medium class="text-secondary">Vendor: <?php echo $vendor ?></medium>
                                            <medium class="text-secondary"> --- Time: <?php echo $time ?></medium>
                                            <?php 
                                                if ($row['process'] == 0) {
                                                    echo "<button class=\"btn btn-primary shop-item-button\" type=\"submit\">Done";
                                                }
                                                else{
                                                    echo "<button class=\"btn btn-primary shop-item-button button2\" type=\"submit\">Delete";
                                                } 
                                            ?></button>
                                      
                            
                     
                                    
                                    <input type="hidden" value=<?php echo $row['id'] ?> name="id">
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