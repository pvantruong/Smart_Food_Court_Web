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
        <?php
            require_once("Cook-header.php");
        ?>
<body>
<h2>Add dish</h2>

<form>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="name of dish"><br>
  <label for="vendor">Vendor:</label><br>
  <input type="text" id="vendor" name="vendor" placeholder="vendor of dish"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price" placeholder="price of dish"><br><br>
  <button type="submit" formaction="addDishmodel.php" formmethod="post" onclick="alert('Menu changed')" >UPDATE</button>
</form>

</body>
</html>