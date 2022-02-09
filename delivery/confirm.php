<!DOCTYPE html>

<?php
session_start();
include "../assets/vars.php";
if (empty($_SESSION['username'])) {
    header("Location: /home.php");
}
?>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/assets/navbar.css" type="text/css" />
    <meta http-equiv="refresh" content="10">
    <link rel="stylesheet" href="/assets/delivery/finish.css">

    <style>
        
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Delivery Page</stext>
    <sb></sb>
    <cc></cc>
    <img id='ci' src='/assets/source_icons_check.svg'>
    <cs>claim</cs>
    <tc></tc>
    <img id='ti' src='/assets/source_icons_pizza-slice.svg'>
    <ts>take food</ts>
    <dc></dc>
    <img id='di' src='/assets/source_icons_delivery.svg'>
    <ds>deliver</ds>
    <?php
    $stage = $_GET['stage'];
    $baseid = $_GET['baseid'];
    $query = db_query("SELECT location, password, shop FROM food WHERE baseid=$baseid");
    while ($row = $query->fetch_assoc()) {
        $lc = $row['location'];
        $password = $row['password'];
        $shop = $row['shop'];
        $isdeliver = $row['isdeliver'];
    }
    if ($isdeliver == 1) {
        echo "<script>location.replace('/delivery/finish.php');</script>";
    }
    if ($stage == 1) {
        db_query("UPDATE food SET isdeliver=2 WHERE baseid=$baseid");
        db_query("UPDATE food SET handler='$username' WHERE baseid=$baseid");    
        /* stage 1. delivery haven't claimed takeaway from shop, yet. */
        $query =  db_query("SELECT location FROM shopdata WHERE name='$shop'");
        while ($row = $query->fetch_assoc()) {
            $sc = $row['location'];
        }
        echo "<img id='cti' src='/assets/source_icons_delivery-truck.svg'>";
        echo "<notMsg>Look for the following receipt number<br>at Pig diner.</notMsg>";
        echo "<button id='passCtn'>$password</button>";
        echo "<a href='http://maps.google.com?q=$sc'>";
        echo "<button id='mapCtn'>View on Map</button>";
        echo "</a>";
        echo "<a href='/delivery/confirm.php?baseid=$baseid&stage=2'>";
        echo "<button id='nextCtn'>Next -></button>";
        echo "</a>";
    } elseif ($stage == 2) {
        echo "<img id='tdi' src='/assets/source_icons_delivery-truck.svg'>";
        echo "<notMsg>Scan the QR code below<br>at the locker site.</notMsg>";
        $rpass = $password + 10000;
        echo "<img id='qrCode' src='https://chart.googleapis.com/chart?chs=547x547&cht=qr&chl=$rpass&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />";
        echo "<a href='http://maps.google.com?q=$lc'>";
        echo "<button id='mapCtn'>View on Map</button>";
        echo "</a>";
        echo "<a href='/delivery/confirm.php?baseid=$baseid&stage=1'>";
        echo "<button id='backCtn'>Back <-</button>";
        echo "</a>";
    }
    ?>
</body>