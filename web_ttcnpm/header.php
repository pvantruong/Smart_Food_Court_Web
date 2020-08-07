<?php
$uid = isset($_SESSION['id']) ? $_SESSION['id'] : '';
if (!$uid) {
    $processEvent = "index.php";
    # code...
}
else{
    $processEvent = "orderProcessing.php";
}
?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="home.php" class="navbar-brand">
            <h3 class="px-5">
                BK Food Court
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
        <h3>
        <?php
        if(isset($_SESSION['id'])){
            if( $_SESSION['id'] != 0){
                echo "Welcome ";
                echo $_SESSION['name'];
            }
        }
        ?>
        </h3>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href=<?php echo $processEvent ?> class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-shopping-basket"></i> Your Order
                        <?php
                        if($uid){
                            $sql = "SELECT * FROM dishqueue WHERE cusid=$uid";
                            $result1 = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result1);
                            if ($count > 0){
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                            }else{
                                echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                            }
                        }
                        ?>
                    </h5>
                </a>
            </div>
        </div>
     
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="search.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-search" aria-hidden="true">Search</i>
                    </h5>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="logout.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-sign-out" aria-hidden="true">Logout</i>
                    </h5>
                </a>
            </div>
        </div>
       

    </nav>
</header>
<!--
<header class="main-header">
            <div class="up-bar">
                <nav class="main-nav nav">
                    <ul>
                        <li><a href="vendor.html">VENODRS</a></li>
                        <li><a href="#">HOME</a></li>
                        <li><a href="search.html">SEARCH</a></li>
                        <nav class="main-nav-login-out">
                            <li><a href="index.php">Logout</a></li>
                        </nav>
                    </ul>
                </nav>
            </div>
            

            <div class="head-display">
                <img class="logo-BK" src="images/logo-BK.png">
                <h1 class="band-name band-name-large">BK Food Court</h1>
                <h3 class="name-team"></h3>
            </div>
           
        </header>

-->






