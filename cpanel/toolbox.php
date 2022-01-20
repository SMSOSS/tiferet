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

h4 {
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

<?php
include "../vars.php";
echo "<h2>User Tools</h2>";
echo "<form method='post'>";
echo "<h3>";
echo "<input type='submit' value='User editor' name='euser'> "; // feature disable user
echo "</h3>";
echo "<h2>Shop tools </h2>";
echo "<h3>";
echo "<input type='submit' value='Shop editor' name='eshop'> "; // feature shop manager
echo "<input type='submit' value='Add shop' name='ashop'> "; // feature add shop
echo "</h3>";
echo "<h2>Food tools</h2>";
echo "<h3>";
echo "<input type='submit' value='Mark all as done' name='adone'> "; // feature reset all, use with caution
echo "<input type='submit' value='Advanced tuner' name='tuner'> "; // feature food fine tune
echo "</h3>";
echo "<h2>Locker tools</h2>";
echo "<h3>";
echo "<input type='submit' value='Free all lockers' name='flocker'> "; // feature set occupy=0 for all locker
echo "<input type='submit' value='Lock all lockers' name='llocker'> "; // feature set occupy=1 for all locker
echo "</h3>";
echo "</form>";
?>
<h4>
<?php
/* start features */
if (isset($_POST['flocker'])) {
    db_query("UPDATE lockerdata SET isoccupy=0 WHERE 1");
    echo "Operation completed";
}
if (isset($_POST['llocker'])) {
    db_query("UPDATE lockerdata SET isoccupy=1 WHERE 1");
    echo "Operation completed";
}
if (isset($_POST['adone'])) {
    db_query("UPDATE food SET istaken=1 WHERE 1");
    echo "Operation completed";
}
if (isset($_POST['tuner'])) {
    header('Location: /cpanel/tuner.php');
}
if (isset($_POST['eshop'])) {
  header('Location: /cpanel/stools.php');
}
if (isset($_POST['ashop'])) {
  header('Location: /cpanel/addshop.php');
}
if (isset($_POST['euser'])) {
    header('Location: /cpanel/utools.php');
}
?>
</h4>
</body>
</html>
