<!DOCTYPE html>
<head>
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
        font-family: HarmonyLight
}

h2 {
        text-align: center;
        font-family: HarmonyReg
}

a {
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

hr.rounded {
  border-top: 4px solid #006666;
  border-radius: 5px;
}
</style>
</head>

<body>
<h1> Details for delivery job </h1>
<h3>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: /delivery/login.php');
	exit;
}

include("../vars.php");
$baseid = $_GET['baseid'];
$query = db_query("SELECT * FROM food WHERE baseid='$baseid' AND istaken='0' AND isdeliver='0' AND iscooked='1'");
$qcount = db_num_rows($query);

if ($qcount > 0) {
        $base = 0;
        while($row = $query->fetch_assoc()) {
                $locker = $row['locker'];
                $food = $row['foodname'];
                $pass = $row['password'];
                $location = $row['location'];
                $shop = $row['shop'];
                
        }
}

$squery = db_query("SELECT location FROM shopdata WHERE name='$shop'");
$scount = db_num_rows($squery);
if ($scount > 0) {
        $base = 0;
        while($row = $squery->fetch_assoc()) {
                $slc = $row['location'];
                
        }
}

echo "<br>";
echo "Foodname: $food";
echo "<br>";
echo "Shop name: $shop";
echo "<br>";
echo "Locker number: $locker";
echo "<form method='post'>";
$lc = "<input type='submit' value='Show locker location' name='lockation'>";
$sc = "<input type='submit' value='Show shop location' name='shopcation'>";
echo "<br>";
echo "$sc $lc";
echo "</form>";

if (isset($_POST['lockation'])){
        header("Location: http://maps.google.com?q=$location");
}
if (isset($_POST['shopcation'])){
        header("Location: http://maps.google.com?q=$slc");
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
        header('Location: /delivery.php');
}
?>
</h3>
</footer>

</html>