<!DOCTYPE html>

<?php
include "../assets/vars.php";
?>

<head>
    <meta http-equiv="refresh" content="10">
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
            width: 86px;
            height: 17px;
            left: 6px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 22px;
            text-align: center;

            color: #000000;
        }


        foodStat {
            position: absolute;
            width: 162px;
            height: 15px;
            left: 79px;
            top: 386px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        sb {
            /* deliver status bar */
            position: absolute;
            left: 1.88%;
            right: 4.06%;
            top: 13.38%;
            bottom: 83.98%;

            background: #E1BEE7;
            border-radius: 20px;
        }

        oc {
            /* ordered status circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 17px;
            top: 76px;
            border-radius: 90px;

            background: #BA68C8;
        }

        #op {
            /*ordered status svg */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 18px;
            top: 77px;
        }

        ostr {
            /* ordered status string */
            position: absolute;
            width: 44px;
            height: 15px;
            left: 2px;
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

        cc {
            /* cooked status circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 102px;
            top: 76px;
            border-radius: 90px;

            background: #BA68C8;
        }

        #cp {
            /* cooked status svg */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 104px;
            top: 77px;
        }

        cstr {
            /* cooked status string */
            position: absolute;
            width: 42px;
            height: 15px;
            left: 88px;
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
            /* delivered status circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 186px;
            top: 76px;
            border-radius: 90px;

            background: #BA68C8;
        }

        #dp {
            /* delivered status svg */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 187px;
            top: 77px;
        }

        dstr {
            /* delivered status string */
            position: absolute;
            width: 52px;
            height: 15px;
            left: 168px;
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

        lc {
            /* claimed status circle */
            position: absolute;
            width: 15px;
            height: 15px;
            left: 278px;
            top: 76px;
            border-radius: 90px;

            background: #BA68C8;
        }

        #lp {
            /* claimed status svg */
            position: absolute;
            width: 13px;
            height: 13px;
            left: 279px;
            top: 77px;
        }

        lstr {
            /* claimed status circle */
            position: absolute;
            width: 44px;
            height: 15px;
            left: 263px;
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

        #oktruck {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 231px;
            top: 76px;
        }

        #cdtruck {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 140px;
            top: 76px;
        }

        #octruck {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 61px;
            top: 76px;
        }

        .statCtn {
            top: 210px;
        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Waiting...</stext>
    <sb></sb>
    <oc></oc>
    <cc></cc>
    <dc></dc>
    <lc></lc>
    <img id="op" src="/assets/source_icons_check.svg">
    <ostr>ordered</ostr>
    <cstr>cooked</cstr>
    <dstr>delivered</dstr>
    <lstr>claimed</lstr>
    <?php
    $baseid = $_GET['baseid'];
    $query = db_query("SELECT iscooked, isdeliver, istaken FROM food WHERE baseid='$baseid'");
    while ($row = $query->fetch_assoc()) {
        $taken = $row['istaken'];
        $deliver = $row['isdeliver'];
        $cook = $row['iscooked'];
    }
    if ($taken == 1) {
        echo "<img id='cp' src='/assets/source_icons_pizza-slice.svg'>";
        echo "<img id='dp' src='/assets/source_icons_delivery.svg'>";
        echo "<img id='lp' src='/assets/source_icons_check.svg'>";
        echo "<div class='statctn'>";
        echo "<foodStat>Enjoy your meal.</foodStat>";
        echo "</div>";
    } elseif ($deliver == 1) {
        echo "<img id='cp' src='/assets/source_icons_pizza-slice.svg'>";
        echo "<img id='dp' src='/assets/source_icons_delivery.svg'>";
        echo "<img id='oktruck' src='/assets/source_icons_delivery-truck.svg'";
        echo "<div class='statctn'>";
        echo "<foodStat>Your food is ready.</foodStat>";
        echo "</div>";
    } elseif ($cook == 1) {
        echo "<img id='cp' src='/assets/source_icons_pizza-slice.svg'>";
        echo "<img id='cdtruck' src='/assets/source_icons_delivery-truck.svg'";
        echo "<div class='statctn'>";
        echo "<foodStat>Your food is being delivered.</foodStat>";
        echo "</div>";
    } else {
        echo "<img id='octruck' src='/assets/source_icons_delivery-truck.svg'";
        echo "<div class='statctn'>";
        echo "<foodStat>Your food is being prepared.</foodStat>";
        echo "</div>";
    }
    ?>
</body>

<navbar>
    <form method="post">
        <octr></octr>
        <input type="submit" id="oimg" value="" name="order">
        <otext>Order</otext>
        <dctr></dctr>
        <input type="submit" id="dimg" value="" name="delivery">
        <dtext>Delivery</dtext>
        <lctr></lctr>
        <input type="submit" id="limg" value="" name="login">
        <ltext>Login</ltext>
        <sectr></sectr>
        <input type="submit" id="seimg" value="" name="settings">
        <setext>Settings</setext>
    </form>
</navbar>

<?php
if (isset($_POST['order'])) {
    echo "<script>location.replace('/home.php');</script>";
}
if (isset($_POST['delivery'])) {
    echo "<script>location.replace('/delivery.php');</script>";
}
if (isset($_POST['login'])) {
    echo "<script>location.replace('/index.php');</script>";
}
if (isset($_POST['settings'])) {
    echo "<script>location.replace('/settings.php');</script>";
}
?>

</html>