
<!DOCTYPE php>
<php>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="../styles.css" />
        <link rel="stylesheet" href="../toggleButton.css" />
    </head>
    <body>
        <?php
            require_once("Cook-header.php");
        ?>
        <section class="container content-section">
            <h2 class="section-header">QUEUE</h2>
            
            <?php
                    include 'queueDisplay.php';
            ?>
        </section>


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
</php>