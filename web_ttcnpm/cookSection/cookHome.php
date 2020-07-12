
<?php
require_once("conection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="../styles.css" />
        
    </head>
    <body>
        <?php
            require_once("Cook-header.php");
        ?>
    <form action = "#">
        <section class="container content-section">
            <h2 class="section-header">Menu controller</h2>
            <div class="shop-items">
                <?php
                    include 'cook-displayMenu.php';
                ?>
            </div>
        </section>  
        <section class="container content-section">
            <button class="btn btn-primary btn-purchase" type="submit" formaction="menuModel.php" formmethod="post" onclick="alert('Menu changed')" >UPDATE</button>
        </section>
    </form>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">BK Food Court</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="../Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
=======
<?php
require("conection.php")
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script>
            (function(a){
                document.getElementsByClassName("badge")[0].innerHTML = a.localStorage.getItem("Count");
                // location.reload();
                }(window))
        </script>
    </head>
    <body>
        <header class="main-header">
            <div class="up-bar">
                <nav class="main-nav nav">
                    <ul>
                        <a href="orderCook.html" class="notification">
                            <span>Order</span>
                            <span class="bagde">0</span>
                        </a>
                        <li><a href="#">HOME</a></li>
                        <li><a href="addDish.php">Add dish</a></li>
                        <nav class="main-nav-login-out">
                            <li><a href="index.php">Logout</a></li>
                        </nav>
                    </ul>
                    
                </nav>
                
            </div>
            

            <div class="head-display">
                <img class="logo-BK" src="../images/logo-BK.png">
                <h1 class="band-name band-name-large">BK Food Court</h1>
                <h3 class="name-team">Trường - Vĩ</h3>
            </div>
           
        </header>
    <form action = "#">
        <section class="container content-section">
            <h2 class="section-header">Menu controller</h2>
            <div class="shop-items">
                <?php
                    include 'cook-displayMenu.php';
                ?>
            </div>
        </section> 
        <section class="container content-section">
            <button class="btn btn-primary btn-purchase" type="submit" formaction="menuModel.php" formmethod="post" onclick="alert('Menu changed')" >UPDATE</button>
        </section>
    </form>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">BK Food Court</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="../Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
>>>>>>> parent of 1cc0bbe... Group all the func of Cook:web_ttcnpm/cookHome.php
</html>