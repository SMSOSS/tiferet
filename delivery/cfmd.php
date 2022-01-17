<html>

<head>
<meta http-equiv="refresh" content="10">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<style>

@font-face { font-family: HarmonyBold; src: url('/fonts/bold.ttf'); }
@font-face { font-family: HarmonyReg; src: url('/fonts/regular.ttf'); }
@font-face { font-family: HarmonyLight; src: url('/fonts/light.ttf'); }
h1 {
        text-align: center;
        font-family: HarmonyBold
}

h3 {
        text-align: center;
        font-family: HarmonyLight
}

body {
background-color: #DBF9FC;
}

input[type=submit] {
    padding:5px 15px;
    background:#DBF9FC;
    border:1px solid black;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    font-family: HarmonyBold;
    font-size: 15px;
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

</head>

<body>

<!-- sql: grab food information first -->
<?php
include "../db.php";
db_open();

$timestamp = $_GET["baseid"];
$order = db_query("SELECT password, locker, foodname, location FROM food WHERE baseid='$timestamp' AND isdeliver=2;");
$prows = db_num_rows($order);

if ($prows > 0) {
    while ($row = $order->fetch_assoc()) {
        $password = $row['password'];
        $locker = $row['locker'];
        $food = $row['foodname'];
        $location = $row['location'];
    }
} else {
    echo "<script>location.replace('/delivery.php');</script>";
}

$rpass = $password + 10000
?>


<h1>
<?php

echo "Delivering $food <br> <br>";

?>

<?php
echo "<img src='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=$rpass&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />"
?>

</h1>

<h1>

<?php
echo "This $food goes to locker $locker. <br>";
?>

<?php
echo "<br>";
echo "<a href='http://maps.google.com?q=$location'>"
?>
<input type="submit" value="Show location on Google Map" />
</a>


</h1>

</body>
</html>