<html>

<head>
<meta http-equiv="refresh" content="10">
<style>
h1 {
        text-align: center;
}

h3 {
        text-align: center;
}
</style>

</head>

<body>

<!-- sql: grab food information first -->
<?php
include("db.php");
db_open();

$timestamp = $_GET["baseid"];
$order = db_query("SELECT password, locker, foodname FROM food WHERE baseid='$timestamp' AND isdeliver=0;");
$prows = db_num_rows($order);


if ($prows > 0) {
        while($row = $order->fetch_assoc()) {
                $password = $row['password'];
                $locker = $row['locker'];
                $food = $row['foodname'];
        }
} else {
        echo "<script>location.replace('delivery.php');</script>";
}

$rpass = $password+10000
?>


<h1>
<?php

echo "Delivering $food <br>";

?>

<?php
echo "<img src='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=$rpass&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />"
?>

</h1>

<h1>

<?php
echo "This $food goes to locker $locker. <br>";

?>

</h1>

</body>
</html>