
<!DOCTYPE php>
<php>
    <head>
        <title>Home - BK Food Court</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="toggleButton.css" />
        <script src="queueDisplay.js"></script>
    </head>
    <body>
        <header class="main-header">
            <div class="up-bar">
                <nav class="main-nav nav">
                    <ul>
                        <a href="orderCook.php" class="notification">
                            <span>Order</span>
                            <span class="badge">0</span>
                        </a>
                        <li><a href="vendor.php">VENODRS</a></li>
                        <li><a href="#">HOME</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </nav>  
            </div>
            
            <div class="head-display">
                <img class="logo-BK" src="images/logo-BK.png">
                <h1 class="band-name band-name-large">BK Food Court</h1>
                <h3 class="name-team">Trường - Vĩ - Vũ - Hậu</h3>
            </div>
        </header>

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
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</php>