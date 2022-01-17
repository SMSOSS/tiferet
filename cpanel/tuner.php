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

$query = db_query("SELECT foodname, baseid, locker, password, location FROM food");
$qcount = db_num_rows($query);
if ($qcount > 0) {
        $base = 0;
         while($row = $query->fetch_assoc()) {
                $food = 0;
                $locker = 0;
                $pass = 0;
                $locker = $row['locker'];
                $food = $row['foodname'];
                $pass = $row['password'];
                echo "<h3>Item: $food</h3>";
                echo "<p>Locker: $locker</p>";
                echo "<p>Passcode: $pass</p>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                $cooked = "<input type='submit' value='Set cooked' name='cooked'>"; // feature set food as cooked
                $delivered = "<input type='submit' value='Set delivered' name='delivered'>"; // feature set food as delivered
                $taken = "<input type='submit' value='Set Taken' name='taken'>"; // feature set food as taken
                $uncooked = "<input type='submit' value='Set uncooked' name='uncooked'>"; // feature set food as uncooked
                $undelivered = "<input type='submit' value='Set undelivered' name='undelivered'>"; // feature set food as undelivered
                $untaken = "<input type='submit' value='Set untaken' name='untaken'>"; // feature set food as untaken
                echo "<h3>";
                echo "$cooked $delivered $taken <br>";
                echo "$uncooked $undelivered $untaken <br>";
                echo "</h3>";
                echo "</form>";
                
        }

}  else {
        echo "There are no pending orders.";
}
?>
<p>
<?php
function setStatus($field, $status, $baseid){
        db_query("UPDATE food SET $field='$status' WHERE baseid='$baseid'");
}

if (isset($_POST['cooked'])){
        $baseid = $_POST['baseid'];
        setStatus("iscooked", "1", "$baseid");
        echo "operation successful";
}
if (isset($_POST['delivered'])){
        $baseid = $_POST['baseid'];
        setStatus("isdeliver", "1", "$baseid");
        echo "operation successful";
}
if (isset($_POST['taken'])){
        $baseid = $_POST['baseid'];
        setStatus("istaken", "1", "$baseid");
        echo "operation successful";
}
if (isset($_POST['uncooked'])){
        $baseid = $_POST['baseid'];
        setStatus("iscooked", "0", "$baseid");
        echo "operation successful";
}
if (isset($_POST['undelivered'])){
        $baseid = $_POST['baseid'];
        setStatus("isdeliver", "0", "$baseid");
        echo "operation successful";
}
if (isset($_POST['untaken'])){
        $baseid = $_POST['baseid'];
        setStatus("istaken", "0", "$baseid");
        echo "operation successful";
}
?>
</p>
</body>
</html>