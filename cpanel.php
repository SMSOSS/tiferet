<!DOCTYPE html>
<html>
<body>
<title>Project Tiferet Homepage</title>
<h1>Project Tiferet Homepage</h1>

<h2>Barcode Generator</h2>
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

<h2>Food ID Validator</h2>
<form action="valid.php" method="get">
Timestamp: <input type="text" name="base"><br>
Food ID: <input type="text" name="food"><br>
<input type="submit">
</form>

</body>
</html>