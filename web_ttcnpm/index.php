<?php
require("conection.php");

session_start();
if(isset($_SESSION['id'])){
  header("location:home.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {
  border: 3px solid #f1f1f1;
  background: white;
	border-radius: 8px 8px 8px 8px;
		-moz-border-radius: 8px 8px 8px 8px;
		-webkit-border-radius: 8px 8px 8px 8px;
	-webkit-box-shadow: #666 0px 3px 4px;
	-moz-box-shadow: #666 0px 3px 4px;
	box-shadow: #666 0px 3px 4px;
  width: 50%;
  margin-left: 25%;
  height:450px;
  }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

.loginForm{
  text-align: center;
}
.changeAccount{
  margin-left:30%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h1 class ="loginForm">Login Form</h1>
<h4 class="changeAccount" ><a href="./cookSection/cookLogin.php">Login with Cook Account!</a></h4>
<form action="./cusvalid.php" method="post">
  <div class="imgcontainer">
    <img src="images/logo1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="submit">Login</button>
    <span class="psw">Don't have an account?<a href="./registeration.php"> Sign Up!</a></span>
  </div>

</form>


</body>
</html>