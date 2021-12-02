<!DOCTYPE html>
<html>
<body>
<?php

/* include */
include("vars.php");
        if (isset($_POST["submitdone"])) {
                global $food;
                $food = $_POST["fname"];
                db_query("INSERT INTO food (locker, baseid, foodid, iscooked, isdeliver, istaken, foodname, password) VALUES ($locker, $baseid, $foodid, 0, 0, 0, '$food', '$pass')");
                echo "<script>location.replace('user.php?food=$food&baseid=$baseid');</script>";
        } else {

?>
<title>order food</title>
<h2>What you wanna eat today :3</h2>

<form method="post">
<input type="text" name="fname"><br>
<input type="submit" name="submitdone">

</form>

</body>
</html>

<?php
        }
?>