<!DOCTYPE html>


<?php
session_start();
include "../assets/vars.php";
if (empty($_SESSION['loggedin'])) {
    header("Location: /home.php");
}
?>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/assets/navbar.css" type="text/css" />
    <link rel="stylesheet" href="/assets/details.css">
</head>

<body>
    <?php
    $baseid = $_GET['baseid'];
    $timestamp = date('H:i', $baseid);
    $query = db_query("SELECT shop, password, foodname, locker, location FROM food WHERE baseid=$baseid");
    while ($row = $query->fetch_assoc()) {
        $shop = $row['shop'];
        $password = $row['password'];
        $foodname = $row['foodname'];
        $locker = $row['locker'];
        $lc = $row['location'];
    }
    $query = db_query("SELECT location FROM shopdata WHERE name='$shop'");
    while ($row = $query->fetch_assoc()) {
        $sc = $row['location'];
    }
    ?>
    <div class='fdvr'>
        <stitle>tiferet</stitle>
        <stext>Order Details</stext>
        <sd>Shop details</sd>
    </div>

    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Shop name";
        echo "<button id='rbtn'>$shop</button>";
        ?>
    </div>
    <div class='sdvr'></div>

    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Shop Location";
        echo "<a href='http://maps.google.com?q=$sc'>";
        echo "<button id='rbtn'>Show on Map</button>";
        echo "</a>"
        ?>
    </div>
    <div class='sdvr'></div>


    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Receipt ID";
        echo "<button id='rbtn'>$password</button>";
        ?>
    </div>
    <div class='sdvr'></div>

    <div class='sdvr'>
        <od>Order Details</od>
    </div>

    <div class='sdvr'></div>
    <div class='sdvr'></div>
    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Order Name";
        echo "<button id='rbtn'>$foodname</button>";
        ?>
    </div>
    <div class='sdvr'></div>

    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Locker Number";
        echo "<button id='rbtn'>$locker</button>";
        ?>
    </div>
    <div class='sdvr'></div>

    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Locker Location";
        echo "<a href='http://maps.google.com?q=$lc'>";
        echo "<button id='rbtn'>Show on Map</button>";
        echo "</a>"
        ?>
    </div>
    <div class='sdvr'></div>

    <div class='pill'>
        <?php
        echo "&nbsp; &nbsp; Order Time";
        echo "<button id='rbtn'>$timestamp</button>";
        ?>
    </div>
    <div class='sdvr'></div>

    <a href='/delivery.php'>
        <button id='backBtn'>
            <- Back </button>
    </a>

    <?php
    echo "<a href=/delivery/confirm.php?baseid=$baseid&stage=1>"
    ?>
    <button id='goBtn'>
        Go -> </button>
    </a>
</body>

</html>