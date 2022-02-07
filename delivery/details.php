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

    <style>
        @import url('https://rsms.me/inter/inter.css');

        html {
            font-family: 'Inter', sans-serif;
        }

        @supports (font-variation-settings: normal) {
            html {
                font-family: 'Inter var', sans-serif;
            }
        }

        body {
            position: relative;
            width: 320px;
            height: 568px;

            background: #F3E5F5;
        }

        stitle {
            position: absolute;
            width: 75px;
            height: 29px;
            left: 7px;
            top: 17px;

            font-family: Inter;
            font-style: normal;
            font-weight: 900;
            font-size: 24px;
            line-height: 29px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        stext {
            position: absolute;
            height: 19px;
            left: 7px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;

            color: #000000;
        }

        sd {
            /* shop detail */
            position: absolute;
            width: 72px;
            height: 15px;
            left: 7px;
            top: 76px;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        .fdvr {
            /* first divider */
            height: 91px;
        }

        .pill {
            /* information pill */
            width: 301px;
            height: 33px;
            line-height: 33px;
            left: 3px;
            top: 91px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        #rbtn {
            width: 100px;
            /* info container */
            height: 33px;
            left: 233px;
            top: 91px;

            background: #CE93D8;
            border-radius: 20px;
            float: right;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        .sdvr {
            /* inferior divider */
            height: 5px;
        }

        od {
            /* order detail */
            position: absolute;
            height: 15px;
            left: 7px;
            top: 202px;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #backBtn {
            position: absolute;
            width: 72px;
            height: 30px;
            left: 6px;
            top: 524px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #goBtn {
            position: absolute;
            width: 72px;
            height: 30px;
            left: 232px;
            top: 524px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }
    </style>
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