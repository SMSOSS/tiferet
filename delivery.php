<!DOCTYPE html>

<?php
session_start();
include "assets/vars.php";
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

        sname {
            position: absolute;
            width: 75px;
            height: 19px;
            left: 80px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;
            color: #8E24AA;
        }

        .fsdvr {
            /* first divider, used to separate text and menu item */
            height: 79px;
        }

        .fdvr {
            /* food divider, foodname container */
            line-height: 33px;
            width: 301px;
            height: 33px;
            left: 3px;
            background: #E1BEE7;
            border-radius: 20px;
            text-decoration: none;
        }

        fname {
            height: 15px;
            left: 25px;
            top: 109px;

            font-family: Inter;
            font-style: normal;
            font-weight: medium;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: right;

            color: #000000;
        }

        .sdvr {
            /* divider to divide between fdvr */
            height: 7px;
        }

        #nohl {
            text-decoration: none;
        }

        #rlb {
            /* right leaning button */
            height: 33px;
            left: 256px;
            top: 100px;
            float: right;

            background: #CE93D8;
            border-radius: 20px;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            float: right;
            /* identical to box height */

            text-align: center;

            color: #000000;

        }

        #pass-pill {
            /* left-leaning button pill */
            height: 33px;
            left: 7px;
            top: 103px;

            background: #CE93D8;
            border-radius: 20px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            float: left;
            border: none;

            color: #6A1B9A;
        }
    </style>
</head>

<body>
    <div class="fsdvr">
        <stitle>tiferet</stitle>
        <stext>Delivery page</stext>
    </div>

<?php
    $query = db_query("SELECT baseid, foodname, password, location, shop FROM food WHERE iscooked='1' AND isdeliver='0'");
    $count = db_num_rows($query);
    if ($count > 0) {
        while ($row = $query->fetch_assoc()) {
            $foodname = $row['foodname'];
            $password = $row['password'];
            $location = $row['location'];
            $baseid = $row['baseid'];
            $shop = $row['shop'];
            echo "<div class='fdvr'>";
            // echo "<a id='nohl' href='shop url'>";
            echo "<button id='pass-pill'>$shop</button>";
            // echo "</a>";
            echo "&nbsp; <fname>$foodname</fname>";
            echo "<a href='/delivery/details.php?baseid=$baseid'>";
            echo "<button id='rlb'>View Details</button>";
            echo "</a>";
            echo "</div>";
            echo "<div class='sdvr'>";
            echo "</div>";
        }
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