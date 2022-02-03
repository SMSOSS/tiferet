<!DOCTYPE html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<style>

@font-face { font-family: HarmonyBold; src: url('fonts/bold.ttf'); }
@font-face { font-family: HarmonyReg; src: url('fonts/regular.ttf'); }
@font-face { font-family: HarmonyLight; src: url('fonts/light.ttf'); }
h1 {
        text-align: center;
        font-family: HarmonyBold;
}

h3 {
        text-align: center;
        font-family: HarmonyLight
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

body {
background-color: #DBF9FC;
}

</style>
</head>

<body>
<?php
include "vars.php";
if (isset($_POST["food"])) {
    $foodname = $_POST["food"];
    $shop = $_POST["shop"];
    $qlocker = db_query("SELECT lockerid, location FROM lockerdata WHERE isoccupy=0 LIMIT 1");
    $qcount = db_num_rows($qlocker);
    if ($qcount > 0) {
        while ($row = $qlocker->fetch_assoc()) {
            $locker = 0;
            $locker = $row['lockerid'];
            $lockation = $row['location'];
        }
    }
    db_query("INSERT INTO food (locker, baseid, foodid, iscooked, isdeliver, istaken, foodname, password, location, shop) VALUES ($locker, $baseid, $foodid, 0, 0, 0, '$foodname', '$pass', '$lockation', '$shop')");
    db_query("UPDATE lockerdata SET isoccupy='1' WHERE lockerid='$locker'");
    echo "<script>location.replace('user.php?food=$foodname&baseid=$baseid');</script>";

} else {

    $qlocker = db_query("SELECT lockerid FROM lockerdata WHERE isoccupy=1;");
    $qcount = db_num_rows($qlocker);
    if ($qcount > 0) {
        while ($row = $qlocker->fetch_assoc()) {
            $locker = 0;
            $locker = $row['lockerid'];
        }
    }
    if ($qcount >= $lcount) {
        ?>
<h3>
<?php
echo "There are no more lockers. Ordering stopped.";
        echo "<br>";
    } else {
        ?>
</h3>
<h1>
        Menu:
</h1>

<h3>
<?php
$qfood = db_query("SELECT food, price, shop FROM menu WHERE soldout=0;");
        $rfood = db_num_rows($qfood);

        if ($rfood > 0) {
            $base = 0;
            while ($row = $qfood->fetch_assoc()) {
                $food = 0;
                $food = $row['food'];
                $price = $row['price'];
                $shop = $row['shop'];
                echo "$food by $shop ― $$price";
                echo "<form method='post'>";
                echo "<input type='hidden' name='food' value='" . $row['food'] . "'>";
                echo "<input type='hidden' name='shop' value='" . $row['shop'] . "'>";
                $temp = "<input type='submit' value='Order!' name='order'>";
                echo $temp;
                echo "</form>";
                echo "<br>";

            }

        }

    }

}
?>

</h3>