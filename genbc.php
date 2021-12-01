<!DOCTYPE html>
<html>
<body>
<title>food is order complet</title>
<h1>Confirm page</h1>

<?php
/* import start */
require 'vendor/autoload.php';

/* variable start */
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
$baseid = strtotime("now");
$locker = 9; 
$foodid = $baseid * $locker * 1014 * 29;

/* real bug trigger */
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($foodid, $generator::TYPE_CODE_128)) . '">';
echo "<br> <br>";
echo "Timestamp is $baseid<br> <br> Food ID is $foodid <br> <br>";
?>

</body>
</html>
