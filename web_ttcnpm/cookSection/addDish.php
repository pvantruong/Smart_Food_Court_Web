<?php
    require("conection.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - BK Food Court</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="../styles.css" />
</head>
        <header class="main-header">
            <div class="up-bar">
                <nav class="main-nav nav">
                    <ul>
                        <li><a href="vendor.html">VENODRS</a></li>
                        <li><a href="#">HOME</a></li>
                        <li><a href="search.html">SEARCH</a></li>
                        <nav class="main-nav-login-out">
                            <li><a href="index.html">Logout</a></li>
                        </nav>
                    </ul>
                    
                </nav>
                
            </div>
            

            <div class="head-display">
                <img class="logo-BK" src="images/logo-BK.png">
                <h1 class="band-name band-name-large">BK Food Court</h1>
                <h3 class="name-team">Trường - Vĩ - Vũ - Hậu</h3>
            </div>
           
        </header>
<body>
<h2>Add dish</h2>

<form>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="name of dish"><br>
  <label for="vendor">Vendor:</label><br>
  <input type="text" id="vendor" name="vendor" placeholder="vendor of dish"><br>
  <label for="price">Price:</label><br>
  <input type="int" id="price" name="price" placeholder="price of dish"><br><br>
  <button type="submit" formaction="addDishmodel.php" formmethod="post" onclick="alert('Menu changed')" >UPDATE</button>
</form>

</body>
</html>