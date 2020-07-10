<?php
require("conection.php")
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
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
        <form action="purchase.php" method='post'>
        <section class="container content-section">
            <h2 class="section-header">Menu</h2>
            <div class="shop-items">
                <?php
                    include 'displayMenu.php';
                ?>
            </div> 
        </section> 
</form>
        <form>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">0 vnd</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="submit" onclick="alert('Your order is procesing')" >PURCHASE</button>
        
        </section>
        </form>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">BK Food Court</h3>
                <ul class="nav footer-nav">
                    
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>