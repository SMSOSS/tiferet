<!DOCTYPE html>
<html>

<head>
<meta http-equiv="refresh" content="10">

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

</style>

</head>
<body>
<title>food is order complet</title>
<h1>Confirm page</h1>

<h3>
<?php
/* import start */
require 'vendor/autoload.php';
include("vars.php");

/* db init */
db_open();

/* variable start */
$timestamp = $_GET["baseid"];
$cook = db_query("SELECT iscooked, isdeliver, istaken, password FROM food WHERE baseid='$timestamp';");
$prows = db_num_rows($cook);
$food = $_GET["food"];

if ($prows > 0) {
        while($row = $cook->fetch_assoc()) {
                $iscook = $row['iscooked'];
                $isdeliver = $row['isdeliver'];
                $password = $row['password'];
		$istaken = $row['istaken'];
        }
}

if ($iscook == 0) {
        echo "Your $food is being prepared. Please be patient.";
} elseif ($istaken == 1) {
	echo "Please enjoy your meal";
} elseif ($isdeliver == 1) {
        echo "Your $food is ready.";
        echo "<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$password&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />";
} elseif ($isdeliver == 0) {
        echo "Your $food is being delivered. Please be patient.";
}

// echo "$fook";
?>

</h3>
</body>
</html>
