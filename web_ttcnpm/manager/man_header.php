
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="man_home.php" class="navbar-brand">
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
        <a href="man_home.php" class="navbar-brand">
            <h5 class="px-5">
            <?php
                if(isset($_SESSION['id'])){
                    if( $_SESSION['id'] != 0){
                        echo "Welcome ";
                        echo $_SESSION['name'];
                    }
                }
            ?>
            </h5>
        </a>
        
        </h3>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="man_home.php" class="nav-item nav-link active">
                    <h5 class="navbar-brand px-5">
                        Add Cook Account
                    </h5>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="man_report.php" class="nav-item nav-link active">
                    <h5 class="cart navbar-brand">
                        View Report
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







