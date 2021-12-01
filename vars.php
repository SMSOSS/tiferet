<!DOCTYPE html>
<html>
<body>
<title>food is order complet</title>
<h1>Confirm page</h1>

<?php
/* import start */
require 'vendor/autoload.php';
include("db.php");

/* variable start */
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
$baseid = strtotime("now");
$locker = 9; 
$foodid = $baseid * $locker * 1014 * 29;
$food = $_GET["fname"];

/* real bug trigger. save all data into db */
db_open();
db_query("INSERT INTO food (locker, baseid, foodid, isdeliver, istaken, foodname) VALUES ($locker, $baseid, $foodid, 0, 0, '$food')");
echo "Done";
?>

</body>
</html>
