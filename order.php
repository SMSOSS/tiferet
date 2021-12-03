<!DOCTYPE html>
<html>
<body>
<?php

/* include */
include("vars.php");
        if (isset($_POST["submitdone"]) || $_GET['food'] != "" ) {
                global $food;
                $food = $_POST["fname"];
                $qlocker = db_query("SELECT lockerid FROM lockerdata WHERE isoccupy=0 LIMIT 1");
                $qcount = db_num_rows($qlocker);
                if ($qcount > 0) {
                        while($row = $qlocker->fetch_assoc()) {
                                $locker = 0;
                                $locker = $row['lockerid'];
                        }
                } else {
                        echo "<script>location.replace('sad.php?food=$food');</script>";
                }
                db_query("INSERT INTO food (locker, baseid, foodid, iscooked, isdeliver, istaken, foodname, password) VALUES ($locker, $baseid, $foodid, 0, 0, 0, '$food', '$pass')");
                db_query("UPDATE lockerdata SET isoccupy='1' WHERE lockerid='$locker'");
                echo "<script>location.replace('user.php?food=$food&baseid=$baseid');</script>";
        } else {
?>
<title>order food</title>
<h2>What you wanna eat today :3</h2>

<?php
        $qlocker = db_query("SELECT lockerid FROM lockerdata WHERE isoccupy=1;");
        $qcount = db_num_rows($qlocker);
        if ($qcount > 0) {
                while($row = $qlocker->fetch_assoc()) {
                $locker = 0;
                $locker = $row['lockerid'];
        }
}
        if ($qcount >= 5) {
                echo "There are no more lockers. Ordering stopped.";
                echo "<br>";
        }
        else {
?>
<form method="post">
<input type="text" name="fname"><br>
<input type="submit" name="submitdone">
<?php
        }
?>

</form>

</body>
</html>

<?php
        }
?>