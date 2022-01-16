<!DOCTYPE html>

<html>
<head>
<style>

@font-face { font-family: HarmonyBold; src: url('../fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('../fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('../fonts/light.ttf'); } 
h1 {
        text-align: center;
        font-family: HarmonyBold;
}

h3 {
        text-align: center;
        font-family: HarmonyLight
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

input[type=text] {
    padding:5px 15px; 
    border:1px solid black;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    font-family: HarmonyLight;
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


h2 {
        text-align: center;
        font-family: HarmonyReg
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>

<body>

<?php
session_start();
include("../vars.php");
?>

<h1>
<?php
echo "Sign up";
?>
</h1>

<h3>
<?php
echo '<form method=post>';
echo "Username: <br>";
echo '<input type="text" name="username">';
echo "<br>";
echo "Password: <br>";
echo '<input type="password" name="pass">';
echo "<br>";
echo "Confirm Password: <br>";
echo '<input type="password" name="cpass">';
echo "<br> <br>";
echo '<input type="submit" value="Sign up" name="signup">';
echo '</form>';

if (isset($_POST['signup'])){
        if (!empty($_POST['username']) && !empty($_POST['pass'])) {
                $username = $_POST['username'];
                $query = db_query("SELECT username FROM userdata WHERE username='$username'");
                $qcount = db_num_rows($query);
                if ($qcount == 0) {
                        $pass = $_POST['pass'];
                        $pass2 = $_POST['cpass'];
                        echo "debug: $pass // $pass2";
                        if ($pass === $pass2) {
                                db_query("INSERT INTO `userdata`(`username`, `password`, `isdelivery`) VALUES ('$username','$pass','1')");
                                echo "Register success";
                                $_SESSION['loggedin'] = TRUE;
                                $_SESSION['username'] = $username;
                                header('Location: /delivery.php');
                        } else {
                                echo "Both passwords doesn't match.";
                        }
                } else {
                        echo "username taken. please retry";
                }
        } else {
                echo "Fields are not being filled? Check your input and try again.";
        }
}
?>
</h3>
</body>

<footer>
<h3>
<form method='post'>
<input type="submit" value="Back" name="back">
</form>
<?php
        if(isset($_POST['back'])){
                header('Location: /delivery/login.php');
        }
?>
</h3>
</footer>
</html>