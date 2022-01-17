<!DOCTYPE html>
<html>
<body>

<?php
/* import start */
include("db.php");

/* variable start */
global $baseid;
global $dummy;
$baseid = strtotime("now");
// $locker = 9; 
$pass = mt_rand(1000,9999);
$foodid = 1;
$lcount = 2; // number of lockers

$version = 1.3;
/* real bug trigger. save all data into db */
db_open();
?>

</body>
</html>
