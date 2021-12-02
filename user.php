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
$cook = db_query("SELECT foodname, baseid FROM food WHERE foodname='$food';");
$prows = db_num_rows($cook);
$food = $_GET["food"];

echo "Your food $food is undergoing delivery. Please wait.";
// echo "$fook";
?>

</body>
</html>
