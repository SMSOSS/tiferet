<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

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

h4 {
        text-align: center;
        font-family: HarmonyLight
}

a {
        text-align: center;
        font-family: HarmonyReg;

}

p {
        text-align: center;
        font-family: HarmonyReg;

}

body {
background-color: #DBF9FC;
}

</style>
</head>

<body>
<title>Tiferet Homepage</title>
<h1>Project Tiferet - HomePage </h1>
<h3>What do you want to do today? </h3>

<h4>
<a href="order.php">Order Food</a> | <a href="kitchen.php">Kitchen System</a> | <a href="delivery.php">Delivery System</a>
</h4>
</body>

<footer>
<p>
<?php
include("vars.php");
echo "Tiferet version $version";
?>
</p>
</footer>

</html>

