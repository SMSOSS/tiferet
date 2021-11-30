<!DOCTYPE html>
<html>
<body>

<h1>Project Tiferet is up and running! </h1>

<?php

/* import start */
require 'vendor/autoload.php';

/* variable start */
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
$foodid = strtotime("now"); 

/* real bug trigger */
echo "Generated Food Identity code is $foodid <br> <br> <br>";
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($foodid, $generator::TYPE_CODE_128)) . '">';
?>

</body>
</html>