<!DOCTYPE html>
<html>

<head>
<title>Kitchen system</title>
<meta http-equiv="refresh" content="10">
</head>
<body>

<h1>Kitchen System </h1>
<?php

/* start import */
include("db.php");
db_open();

if (isset($_POST["baseid"])) {
        $base = $_POST["baseid"];
        db_query("UPDATE food SET iscooked=1 WHERE baseid=$base");
}

/* start function and variable */
$count = db_query("SELECT COUNT(baseid) as total FROM food WHERE NOT iscooked='1';");
$pending = db_query("SELECT foodname, baseid FROM food WHERE NOT iscooked='1';");
$prows = db_num_rows($pending);

$countr=db_fetch_array($count);
$rcount=$countr['total'];

if ($rcount == 0){
        echo "No pending orders. Hooray!";
} else {
        echo "There are $rcount pending orders. <br> <br>";
        echo "They are: <br> <br>";
        if ($prows > 0) {
                $base = 0;
                while($row = $pending->fetch_assoc()) {
                        echo $row['foodname'];
                        echo "  ";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                        $temp = "<input type='submit' value='Mark done' name='mdone'>";
                        echo $temp;
                        echo "</form>";
                        echo "<br>";
                        $i++;
                }
        }
        echo "<br>";

}
?>

</body>
</html>