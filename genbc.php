<!DOCTYPE html>
<html>

<head>
<style>

@font-face { font-family: HarmonyBold; src: url('fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('fonts/light.ttf'); } 
h1 {
        text-align: center;
        font-family: HarmonyBold
}

h3 {
        text-align: center;
        font-family: HarmonyLight
}

body {
background-color: #DBF9FC;
}

</style>
</head>

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
$foodname = $_GET["fname"];

/* real bug trigger */
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($foodid, $generator::TYPE_CODE_128)) . '">';
echo "<br> <br>";
echo "Your order for $foodname will be ready in locker $locker in no time. <br> <br>";
echo "DBID $baseid | $foodid";
?>

</body>
</html>
