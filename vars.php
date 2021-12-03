<!DOCTYPE html>
<html>
<body>

<?php
/* import start */
require 'vendor/autoload.php';
include("db.php");

/* variable start */
global $baseid;
global $dummy;
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
$baseid = strtotime("now");
// $locker = 9; 
$pass = mt_rand(1000,9999);
$foodid = $baseid * 1014 * 29;

/* real bug trigger. save all data into db */
db_open();
?>

</body>
</html>
