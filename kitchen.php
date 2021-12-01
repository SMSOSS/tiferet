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
$prows = db_num_rows($pending);

$countr=db_fetch_array($count);
$rcount=$countr['total'];

if ($rcount == 0){
        echo "No pending orders. Hooray!";
} else {
        echo "There are $rcount pending orders. <br> <br>";
        echo "They are: <br> <br>";
        if ($prows > 0) {
                while($row = $pending->fetch_assoc()) {
                        echo $row['foodname'];
                        echo "<br>";
                }
        }
}
?>

</body>
</html>