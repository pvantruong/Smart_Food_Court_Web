<?php
    require_once("conection.php");
    session_start();
?>

        <header class="main-header">
            <div class="up-bar">
                <nav class="main-nav nav">
                    <ul>
                        <a href="orderCook.php" class="notification">
                            <span>Order</span>
                            <span class="bagde"><?php
                    
                                $sql = "SELECT * FROM dishqueue";
                                $result2 = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($result2);
                                if ($count > 0){
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }
                        
                            ?></span>
                        </a>
                        <li><a href="cookHome.php">HOME</a></li>
                        <li><a href="addDish.php">Add dish</a></li>
                        <nav class="main-nav-login-out">
                            <li><a href="logout.php">Logout</a></li>
                        </nav>
                    </ul>
                    
                </nav>
                
            </div>
            

            <div class="head-display">
                <img class="logo-BK" src="../images/logo-BK.png">
                <h1 class="band-name band-name-large">BK Food Court </h1>
                <h3 class="name-team">Hello, cook <?php
                if(isset($_SESSION['id'])){
                    if( $_SESSION['id'] != 0){
                        echo $_SESSION['name'];
                    }
                }
                ?> !! Have a nice day</h3>
            </div>
</header>