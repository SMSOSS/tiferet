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

        sb {
            /* statusbar */
            position: absolute;
            left: 2.19%;
            right: 3.75%;
            top: 13.2%;
            bottom: 84.15%;

            background: #E1BEE7;
            border-radius: 20px;

        }

        cc {
            /* claim job circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 12px;
            top: 75px;

            background: #BA68C8;
            border-radius: 90%
        }

        #ci {
            /* claim job svg */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 13px;
            top: 76px;
        }

        cs {
            /* claim job string */
            position: absolute;
            width: 30px;
            height: 15px;
            left: 4px;
            top: 90px;

            font-family: Inter;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        ct_truck {
            /* truck between claimed and taken */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 82px;
            top: 76px;
        }

        tc {
            /* take food circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 153px;
            top: 76px;

            background: #BA68C8;
            border-radius: 90%;
        }

        #ti {
            /* take food image */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 155px;
            top: 77px;
        }

        ts {
            /* take job string */
            position: absolute;
            width: 53px;
            height: 15px;
            left: 134px;
            top: 91px;

            font-family: Inter;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        dc {
            /* finish deliver circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 287px;
            top: 75px;
            border-radius: 90%;

            background: #BA68C8;
        }

        #di {
            /* finsih deliver svg */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 289px;
            top: 76px;
        }

        ds {
            /* finish deliver string */
            position: absolute;
            width: 38px;
            height: 15px;
            left: 276px;
            top: 90px;

            font-family: Inter;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #cti {
            /* truck between claim and deliver */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 82px;
            top: 76px;
        }

        notMsg {
            /* notification msg */
            position: absolute;
            width: 213px;
            height: 30px;
            left: 55px;
            top: 159px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            text-align: center;
            color: #000000;
        }

        #passCtn {
            /* ID container for food */
            position: absolute;
            width: 233px;
            height: 110px;
            left: 45px;
            top: 209px;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 75px;
            line-height: 91px;
            /* identical to box height */

            text-align: center;
            border: none;
            color: #4A148C;
        }

        #mapCtn {
            position: absolute;
            width: 120px;
            height: 30px;
            left: 100px;
            top: 392px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        #nextCtn {
            position: absolute;
            width: 72px;
            height: 30px;
            left: 232px;
            top: 524px;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;
            border: none;
        }

        #tdi {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 221px;
            top: 75px;
        }

        #qrCode {
            position: absolute;
            width: 150px;
            height: 148.83px;
            left: 85px;
            top: 221px;
        }

        #backCtn {
            position: absolute;
            width: 72px;
            height: 30px;
            left: 6px;
            top: 524px;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;
            border: none;
        }
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
    db_query("UPDATE food SET isdeliver=2 WHERE baseid=$baseid");
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