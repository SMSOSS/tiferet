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

body {
background-color: #DBF9FC;
}


h2 {
        text-align: center;
        font-family: HarmonyReg
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>

<body>

<?php
session_start();
include("../vars.php");
$shop = $_SESSION['shop'];
session_start();
if (!isset($_SESSION['loggedin'])) {
        header('Location: /kitchen/login.php');
        exit;
}
?>

<h1>
<?php
echo "$shop menu editor <br>";
echo "edit current menu <br>";
?>
</h1>

<h2>
<div class="topnav">
  <a href="/kitchen.php">Home</a>
  <a class="active" href="/kitchen/editor.php">Menu Editor</a>
  <a href="/kitchen/login.php">Log Out</a>
</div>
</h2>

<h3>
<?php
$qfood = db_query("SELECT food FROM menu WHERE shop='$shop' AND soldout='0';");
$rfood = db_num_rows($qfood);

if ($rfood > 0) {
        while($row = $qfood->fetch_assoc()) {
                $food = 0;
                $food = $row['food'];
                echo "$food";
                echo "<form method='post'>";
                echo "<input type='hidden' name='food' value='" . $row['food'] . "'>";
                $temp = "<input type='submit' value='Mark Sold out' name='soldout'>";
                echo $temp;
                echo "</form>";
                echo "<br>";
                
        }
        if (isset($_POST['soldout'])){
                $target = $_POST['food'];
                db_query("UPDATE menu SET soldout=1 WHERE food='$target';");
                header('Location: /kitchen/editor.php');
        }
}

$qfood = db_query("SELECT food FROM menu WHERE shop='$shop' AND soldout='1';");
$rfood = db_num_rows($qfood);

if ($rfood > 0) {
        while($row = $qfood->fetch_assoc()) {
                $food = 0;
                $food = $row['food'];
                echo "$food";
                echo "<form method='post'>";
                echo "<input type='hidden' name='food' value='" . $row['food'] . "'>";
                $temp = "<input type='submit' value='Mark Available' name='avail'>";
                echo $temp;
                echo "</form>";
                echo "<br>";
                
        }
        if (isset($_POST['avail'])){
                $target = $_POST['food'];
                db_query("UPDATE menu SET soldout=0 WHERE food='$target';");
                header('Location: /kitchen/editor.php');
        }
}
?>
</h3>
</body>

<footer>
<h3>
<form method='post'>
<input type="submit" value="Add Item" name="additem">
</form>
<?php
        if(isset($_POST['additem'])){
                header('Location: /kitchen/additem.php');
        }
?>
</h3>
</footer>
</html>