<!DOCTYPE html>
<head>
        <title>Login</title>

        <style>

@font-face { font-family: HarmonyBold; src: url('../fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('../fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('../fonts/light.ttf'); } 
h1 {
        text-align: center;
        font-family: HarmonyBold
}

h3 {
        text-align: center;
        font-family: HarmonyReg
}

h2 {
        text-align: center;
        font-family: HarmonyReg
}

input[type=submit] {
    padding:5px 15px; 
    background:#DBF9FC; 
    border:1px solid black;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    font-family: HarmonyBold;
    font-size: 15px;
}

input[type=password] {
    padding:5px 15px; 
    border:1px solid black;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    font-family: HarmonyLight;
    font-size: 15px;
}

body {
background-color: #DBF9FC;
}

/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: center;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #8F00FF;
  color: white;
}
</style>
</head>

<body>
<?php
session_start();
unset($_SESSION['loggedin']);
?>
<h1>Login</h1>
<h3>Please enter your password: </h3>
<h3>
<form method="post">
<input type="password" name="password"><br>
<input type="submit" name="login">
</form>
</h3>
<?php

include("../vars.php");
if (isset($_POST["login"]) && isset($_POST["password"]) ) {
        $pass = $_POST['password'];
        $qshop = db_query("SELECT name, passcode FROM shopdata WHERE passcode='$pass'");
        $qcount = db_num_rows($qshop);
        if ($qcount > 0) {
                while($row = $qshop->fetch_assoc()) {
                        $pass = $row['passcode'];
                        $shop = $row['name'];
                }
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['pass'] = $pass;
                $_SESSION['shop'] = $shop;
                header('Location: /kitchen.php');
        } else {
                echo "Wrong username / password.";
        }
} 
?>
</body>
</html>