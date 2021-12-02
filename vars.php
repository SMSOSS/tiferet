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
$locker = 9; 
$foodid = $baseid * $locker * 1014 * 29;

/* real bug trigger. save all data into db */
db_open();
?>

</body>
</html>
