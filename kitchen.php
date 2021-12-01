<!DOCTYPE html>
<html>
<body>

<h1>Kitchen System </h1>
<?php

/* start import */
include("db.php");

db_open();

/* start function and variable */
$count = db_query("SELECT COUNT(baseid) as total FROM food;");
$pending = db_query("SELECT foodname FROM food");

$countr=db_fetch_array($count);
$rcount=$countr['total'];

if ($rcount == 0){
        echo "No pending orders. Hooray!";
} else {
        echo "There are $rcount pending orders. <br> <br>";
}

?>

</body>
</html>