<?php
require_once("conection.php");
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="/bk-git/web_cnpm/web_ttcnpm/css/styles.css" />
        
    </head>
    <body>
        <header class="main-header">
            <div class="up-bar">
                <nav class="main-nav nav">
                    <ul>
                        <a href="orderCook.php" class="notification">
                            <span>Order</span>
                            <span class="bagde">0</span>
                        </a>
                        <li><a href="#">HOME</a></li>
                        <li><a href="addDish.php">Add dish</a></li>
                        <nav class="main-nav-login-out">
                            <li><a href="cookLogin.php">Logout</a></li>
                        </nav>
                    </ul>
                    
                </nav>
                
            </div>
            

            <div class="head-display">
                <img class="logo-BK" src="/bk-git/web_cnpm/web_ttcnpm/images/logo-BK.png">
                <h1 class="band-name band-name-large">BK Food Court </h1>
                <h3 class="name-team">Hello, cooker <?php
                if(isset($_SESSION['id'])){
                    if( $_SESSION['id'] != 0){
                        echo $_SESSION['name'];
                    }
                }
                ?> !! Have a nice day</h3>
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
                            <img src="/bk-git/web_cnpm/web_ttcnpm/Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>