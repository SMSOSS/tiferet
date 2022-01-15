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
include("../vars.php");
$shop = $_SESSION['shop'];
?>

<h1>
<?php
echo "$shop menu editor <br>";
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
        }
}
?>
</h3>
</body>

</html>