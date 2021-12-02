<!DOCTYPE html>
<html>

<head>
<meta http-equiv="refresh" content="10">
</head>
<body>
<title>food is order complet</title>
<h1>Confirm page</h1>

<?php
/* import start */
require 'vendor/autoload.php';
include("vars.php");

/* db init */
db_open();

/* variable start */
$timestamp = $_GET["baseid"];
$cook = db_query("SELECT iscooked, isdeliver FROM food WHERE baseid='$timestamp';");
$prows = db_num_rows($cook);
$food = $_GET["food"];

if ($prows > 0) {
        while($row = $cook->fetch_assoc()) {
                $iscook = $row['iscooked'];
                $isdeliver = $row['isdeliver'];
        }
}

if ($iscook == 0) {
        echo "Your $food is being prepared. Please be patient.";
} elseif ($deliver = 1) {
        echo "Your $food is ready.";
} elseif ($deliver == 0) {
        echo "Your $food is being delivered. Please be patient.";
}

// echo "$fook";
?>

</body>
</html>
