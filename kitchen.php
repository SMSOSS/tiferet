<!DOCTYPE html>
<html>

<head>
<title>Kitchen system</title>
<meta http-equiv="refresh" content="10">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<style>

@font-face { font-family: HarmonyBold; src: url('fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('fonts/light.ttf'); } 
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
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
<body>

<h1>Kitchen System </h1>

<h3>
<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: /kitchen/login.php');
	exit;
}

$shop = $_SESSION['shop'];
echo "welcome $shop ! <br>";
/* start import */
include("db.php");
db_open();
?>
</h3>

<h3>
<?php
if (isset($_POST["baseid"])) {
        $base = $_POST["baseid"];
        db_query("UPDATE food SET iscooked=1 WHERE baseid=$base");
}

/* start function and variable */
$count = db_query("SELECT COUNT(baseid) as total FROM food WHERE shop='$shop' AND NOT iscooked='1';");
$pending = db_query("SELECT foodname, baseid FROM food WHERE shop='$shop' AND NOT iscooked='1';");
$prows = db_num_rows($pending);

$countr=db_fetch_array($count);
$rcount=$countr['total'];

if ($rcount == 0){
        echo "No pending orders. Hooray!";
} else {
        echo "There are $rcount pending orders. <br> <br>";
        echo "They are: <br> <br>";
        if ($prows > 0) {
                $base = 0;
                while($row = $pending->fetch_assoc()) {
                        echo $row['foodname'];
                        echo "  ";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                        $temp = "<input type='submit' value='Mark done' name='mdone'>";
                        echo $temp;
                        echo "</form>";
                        echo "<br>";
                }
        }
        echo "<br>";

}
?>

</h3>
</body>
</html>