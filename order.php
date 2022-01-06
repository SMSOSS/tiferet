<!DOCTYPE html>
<head>
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
    padding:4px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

body {
background-color: #DBF9FC;
}

</style>
</head>

<body>
<?php
include("vars.php");
if (isset($_POST["food"])){
        $foodname = $_POST["food"];
        $qlocker = db_query("SELECT lockerid FROM lockerdata WHERE isoccupy=0 LIMIT 1");
        $qcount = db_num_rows($qlocker);
        if ($qcount > 0) {
                while($row = $qlocker->fetch_assoc()) {
                        $locker = 0;
                        $locker = $row['lockerid'];
                }
        }
        db_query("INSERT INTO food (locker, baseid, foodid, iscooked, isdeliver, istaken, foodname, password) VALUES ($locker, $baseid, $foodid, 0, 0, 0, '$foodname', '$pass')");
        db_query("UPDATE lockerdata SET isoccupy='1' WHERE lockerid='$locker'");
        echo "<script>location.replace('user.php?food=$foodname&baseid=$baseid');</script>";

} else {

$qlocker = db_query("SELECT lockerid FROM lockerdata WHERE isoccupy=1;");
$qcount = db_num_rows($qlocker);
if ($qcount > 0) {
        while($row = $qlocker->fetch_assoc()) {
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
$qfood = db_query("SELECT food, price FROM menu WHERE soldout=0;");
$rfood = db_num_rows($qfood);

if ($rfood > 0) {
        $base = 0;
        while($row = $qfood->fetch_assoc()) {
                $food = 0;
                $food = $row['food'];
                $price = $row['price'];
                echo "$food ― $$price";
                echo "<form method='post'>";
                echo "<input type='hidden' name='food' value='" . $row['food'] . "'>";
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