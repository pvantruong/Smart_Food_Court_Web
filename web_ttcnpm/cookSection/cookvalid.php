<?php
header("location:cookHome.php");
require("conection.php");

$username = isset($_POST['uname']) ? $_POST['uname'] : '';
$password = isset($_POST['psw']) ? $_POST['psw'] : '';

$sql = "SELECT id, username, name, psw FROM cooks";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row['username'] == $username && $row['psw'] == $password){
            session_start();
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            exit;
        }
    }
    echo "wrong username and password, try again";
    header("location:cookLogin.php");
}   else {
    echo "no usernam and password in database";
    header("location:cookLogin.php");
}
mysqli_close($conn);
?>