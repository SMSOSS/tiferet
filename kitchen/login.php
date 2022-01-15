<!DOCTYPE html>
<head>
        <title>Login</title>
</head>

<body>
<?php
session_start();
unset($_SESSION['loggedin']);
?>
<form method="post">
<input type="password" name="password"><br>
<input type="submit" name="login">
</form>
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
                echo "wrong pass bsdk";
        }
} 
?>
</body>
</html>