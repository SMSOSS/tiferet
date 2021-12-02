<!DOCTYPE html>
<html>

<head>
<meta http-equiv="refresh" content="10">
</head>

<body>

<title>Deliver Panel</title>
<h1>Deliver Panel</h1>

<?php
/* include global vars */
include("db.php");

/* start db. nothing goes before this line */
db_open();

/* FS: isset check */
if (isset($_POST["baseid"])) {
        $base = $_POST["baseid"];
        db_query("UPDATE food SET isdeliver=1 WHERE baseid=$base");
}

/* variable start */
$pending = db_query("SELECT foodname, baseid, locker FROM food WHERE iscooked='1' AND isdeliver='0';");
$pcount = db_num_rows($pending);

/* real bug trigger */
if ($pcount == 0){
        echo "There's no pending yet. Take some rest :)";
} else {
        echo "There are $rcount pending orders. <br> <br>";
        echo "They are: <br> <br>";
        if ($pcount > 0) {
                $base = 0;
                while($row = $pending->fetch_assoc()) {
                        $food = 0;
                        $locker = 0;
                        $locker = $row['locker'];
                        $food = $row['foodname'];
                        echo "$food that goes to $locker";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                        $temp = "<input type='submit' value='Mark done' name='mdone'>";
                        echo $temp;
                        echo "</form>";
                        echo "<br>";
                        $food++;
                }
        }
        echo "<br>";

}

?>

</body>
</html>