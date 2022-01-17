<!DOCTYPE html>
<html>

<head>
<title>Admin Toolbox</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<style>

@font-face { font-family: HarmonyBold; src: url('/fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('/fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('/fonts/light.ttf'); } 
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

p {
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

body {
background-color: #DBF9FC;
}

/* Add a black background color to the top navigation */
.topnav {
  background-color: #40E0D0;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: center;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  /* background-color: #ddd;
  color: black; */
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #8F00FF;
  color: white;
}
</style>

</head>
<body>

<h1>Control Panel </h1>
<h3>
<?php

session_start();
if (!isset($_SESSION['aloggedin'])) {
	header('Location: /cpanel/login.php');
	exit;
}

$username = $_SESSION['username'];
echo "welcome $username ! <br>";
?>
</h3>


<h2>
<div class="topnav">
  <a href="/cpanel/cpanel.php">Home</a>
  <a class="active" href="/cpanel/toolbox.php">Toolbox</a>
  <a href="/cpanel/login.php">Log Out</a>
</div>
</h2>

<h2>Food details</h2>
<?php
include("../vars.php");

$query = db_query("SELECT * FROM shopdata");
$qcount = db_num_rows($query);
if ($qcount > 0) {
        $base = 0;
         while($row = $query->fetch_assoc()) {
                $name = $row['name'];
                $pass = $row['passcode'];
                $location = $row['location'];
                $dstat = $row['isdisable'];
                echo "<h3>Shop: $name</h3>";
                echo "<p>Passcode: $pass</p>";
                echo "<p>Location: $location</p>";
                if ($dstat == 0){
                        echo "<p>Status: Enabled</p>";
                } else {
                        echo "<p>Status: Disabled</p>";
                }
                echo "<form method='post'>";
                echo "<input type='hidden' name='shop' value='" . $row['name'] . "'>";
                $cpw = "<input type='submit' value='Change Password' name='changepass'>"; // feature change password
                $clc = "<input type='submit' value='Change location' name='changeloc'>"; // feature change location
                $disable = "<input type='submit' value='Disable shop' name='disable'>"; // feature disable restaurant
                $enable = "<input type='submit' value='Enable shop' name='enable'>"; // feature disable restaurant
                echo "<h3>";
                echo "$cpw $clc <br>";
                echo "$disable $enable<br>";
                echo "</h3>";
                echo "</form>";
                
        }

}
?>
<h3>
<?php

if (isset($_POST['changepass'])){
        $shop = $_POST['shop'];
        $newpassword = mt_rand(1000, 9999);
        db_query("UPDATE shopdata SET passcode='$newpassword' WHERE name='$shop'");
        header('Location: /cpanel/stools.php');
}
if (isset($_POST['disable'])){
        $shop = $_POST['shop'];
        db_query("UPDATE shopdata SET isdisable=1 WHERE name='$shop'");
        db_query("UPDATE menu SET soldout=1 WHERE shop='$shop'");
        echo "operation successful";
        header('Location: /cpanel/stools.php');
}
if (isset($_POST['enable'])){
        $shop = $_POST['shop'];
        db_query("UPDATE shopdata SET isdisable=0 WHERE name='$shop'");
        db_query("UPDATE menu SET soldout=0 WHERE shop='$shop'");
        echo "operation successful";
        header('Location: /cpanel/stools.php');
}
?>
</h3>
</body>
<footer>
<h3>
<?php
echo "<br>";
echo '<form method="post">';
echo '<input type="submit" value="Back" name="back">';
echo "</form>";
if (isset($_POST["back"])){
        header('Location: /cpanel/toolbox.php');
}
?>
</h3>
</footer>
</html>