<html>
<body>

<h1>Project Tiferet FID Calculator</h1>

<?php
/* var start */
$locker = $_GET["food"] / 1014 / $_GET["base"] / 29;

if ($locker > 10){
        /* locker will be invalid as we are currently max 10 */
        echo "Invalid Food ID detected <br>";
} elseif($locker !== 0.00){
        echo "Invalid Food ID detected <br>";
} else {
        echo "Valid Food ID detected and food is stored in locker $locker";
}

echo "<br> <br>";
?>

<button onclick="history.go(-1);">Back </button>

</body>
</html>