
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