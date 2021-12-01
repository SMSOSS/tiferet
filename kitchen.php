<!DOCTYPE html>
<html>
<body>

<h1>Kitchen System </h1>
<?php

/* start import */
include("db.php");

db_open();

/* start function and variable */
function clean1(){ echo "test"; }
$count = db_query("SELECT COUNT(baseid) as total FROM food WHERE NOT iscooked='1';");
$pending = db_query("SELECT foodname FROM food WHERE NOT iscooked='1';");
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
                        echo "  ";
                        echo "<input type='button' value='Mark done' onclick='done()'>";
                        echo "<br>";
                }
        }
        echo "<br>";

}
?>

</body>
</html>