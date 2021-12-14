<!DOCTYPE html>
<html>

<head>
</head>

<body>

<title>Deliver Panel</title>
<h1>Deliver Panel</h1>
<h2>refresh page to check new order </h2>

<?php
/* include global vars */
include("db.php");

/* start db. nothing goes before this line */
db_open();

/* FS: isset check */


/* variable start */
$pending = db_query("SELECT foodname, baseid, locker, password FROM food WHERE iscooked='1' AND isdeliver='0';");
$pcount = db_num_rows($pending);

/* test */
if ($pcount > 0) {
        $base = 0;
        while($row = $pending->fetch_assoc()) {
                $food = 0;
                $locker = 0;
                $pass = 0;
                $locker = $row['locker'];
                $food = $row['foodname'];
                $pass = $row['password'];
                $rpass = $pass+3;
                echo "$food that goes to $locker";
                echo "<form method='post'>";
                echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                $temp = "<input type='submit' value='Take Job' name='mdone'>";
                echo $temp;
                echo "</form>";
                
        }

}

if (isset($_POST["baseid"])) {
        $base = $_POST["baseid"];
        $pending = db_query("SELECT foodname, baseid, locker, password FROM food WHERE baseid='$base';");
        if ($pcount > 0) {
                $base = 0;
                while($row = $pending->fetch_assoc()) {
                        $food = 0;
                        $locker = 0;
                        $pass = 0;
                        $locker = $row['locker'];
                        $food = $row['foodname'];
                        $pass = $row['password'];
                }
        }
        echo "<script>event.preventDefault();</script>";
        echo "<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$rpass&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />";
        echo "The food $food goes to locker $locker.";
        // db_query("UPDATE food SET isdeliver=1 WHERE baseid=$base");
} else {
        echo "no pending orders. yay";
        echo '<meta http-equiv="refresh" content="10">';
}
/*
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
                        $pass = 0;
                        $locker = $row['locker'];
                        $food = $row['foodname'];
                        $pass = $row['password'];
                        echo "$food that goes to $locker";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                        $temp = "<input type='submit' value='Take Job' name='mdone'>";
                        echo $temp;
                        echo "</form>";
                        echo "<br>";
                        $food++;
                }
        }
        echo "<br>";

}
*/
?>

</body>
</html>