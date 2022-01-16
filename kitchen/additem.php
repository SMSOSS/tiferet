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
?>

<h1>
<?php
echo "$shop menu editor <br>";
echo "add item <br>";
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
echo '<form method=post>';
echo "Food name: <br>";
echo '<input type="text" name="food">';
echo "<br>";
echo "Price (without price tag): <br>";
echo '<input type="text" name="price">';
echo "<br> <br>";
echo '<input type="submit" value="Add to menu" name="add">';
echo '</form>';
if (isset($_POST['add'])) {
        if (!empty($_POST['food']) && !empty($_POST['price'])){
                $food = $_POST['food'];
                $price = $_POST['price'];
                db_query("INSERT INTO `menu`(`food`, `price`, `soldout`, `shop`) VALUES ('$food','$price','0','$shop');");
                echo "Added to menu!";
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
                header('Location: /kitchen/editor.php');
        }
?>
</h3>
</footer>
</html>