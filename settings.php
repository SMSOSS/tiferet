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

        navbar {
            position: absolute;
            width: 100%;
            height: 45px;
            left: 0px;
            bottom: 0px;
            background: #E1BEE7;
        }

        otext {
            position: absolute;
            width: 33px;
            height: 15px;
            left: 25px;
            top: 29px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #oimg {
            position: absolute;
            width: 24px;
            height: 24px;
            left: 29px;
            top: 5px;

            border-radius: 90px;

        }

        octr {
            position: absolute;
            width: 26px;
            height: 26px;
            left: 28px;
            top: 5px;

            background: #CE93D8;
            border-radius: 5px;
        }

        dtext {
            position: absolute;
            width: 61px;
            height: 8px;
            left: 87px;
            top: 29px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            text-align: center;

            color: #000000;
        }

        #dimg {
            position: absolute;
            width: 24px;
            height: 24px;
            left: 105px;
            top: 7px;
        }

        dctr {
            position: absolute;
            width: 26px;
            height: 26px;
            left: 104px;
            top: 6px;

            background: #CE93D8;
            border-radius: 5px;
        }

        ltext {
            position: absolute;
            width: 32px;
            height: 8px;
            left: 181px;
            top: 29px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            text-align: center;

            color: #000000;
        }

        #limg {
            position: absolute;
            width: 24px;
            height: 24px;
            left: 185px;
            top: 4px;
        }

        lctr {
            position: absolute;
            width: 26px;
            height: 26px;
            left: 184px;
            top: 4px;

            background: #CE93D8;
            border-radius: 5px;
        }

        setext {
            position: absolute;
            width: 47px;
            height: 15px;
            left: 259px;
            top: 29px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            text-align: center;

            color: #000000;
        }

        #seimg {
            position: absolute;
            width: 24px;
            height: 24px;
            left: 268px;
            top: 6px;
        }

        sectr {
            position: absolute;
            width: 26px;
            height: 26px;
            left: 267px;
            top: 5px;

            background: #CE93D8;
            border-radius: 5px;
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
            text-align: center;

            color: #000000;
        }

        stext {
            position: absolute;
            width: 66px;
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

        general {
            position: absolute;
            width: 46px;
            height: 15px;
            left: 11px;
            top: 76px;

            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        accent_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 98px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        accent_label {
            position: absolute;
            width: 77px;
            height: 15px;
            left: 23px;
            top: 107px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        accent_stat {
            position: absolute;
            width: 58px;
            height: 15px;
            left: 235px;
            top: 107px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        theme_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 138px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        theme_label {
            position: absolute;
            width: 41px;
            height: 15px;
            left: 23px;
            top: 147px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        theme_stat {
            position: absolute;
            width: 53px;
            height: 15px;
            left: 238px;
            top: 147px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        lang_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 178px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        lang_label {
            position: absolute;
            width: 59px;
            height: 15px;
            left: 23px;
            top: 187px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        lang_stat {
            position: absolute;
            width: 37px;
            height: 15px;
            left: 246px;
            top: 187px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        ver_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 218px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        ver_label {
            position: absolute;
            width: 93px;
            height: 15px;
            left: 23px;
            top: 227px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        ver_stat {
            position: absolute;
            width: 54px;
            height: 15px;
            left: 238px;
            top: 227px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        account {
            position: absolute;
            width: 49px;
            height: 15px;
            left: 17px;
            top: 258px;

            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        uname_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 280px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        uname_label {
            position: absolute;
            width: 65px;
            height: 15px;
            left: 23px;
            top: 289px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        uname_stat {
            position: absolute;
            width: 28px;
            height: 15px;
            left: 75%;
            top: 289px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;

        }

        #acctype_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 320px;

            background: #E1BEE7;
            border-radius: 20px;
            outline: none;
            border: none;
        }

        acctype_label {
            position: absolute;
            width: 82px;
            height: 15px;
            left: 23px;
            top: 329px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        acctype_stat {
            position: absolute;
            width: 38px;
            height: 15px;
            left: 75%;
            top: 329px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        #cpw_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 360px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;
            outline: none;
        }

        cpw_label {
            position: absolute;
            width: 107px;
            height: 15px;
            left: 23px;
            top: 369px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        payment {
            position: absolute;
            width: 51px;
            height: 15px;
            left: 17px;
            top: 403px;

            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #dpm_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 425px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;
            outline: none;
        }

        dpm_label {
            position: absolute;
            width: 146px;
            height: 15px;
            left: 23px;
            top: 434px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        dpm_stat {
            position: absolute;
            width: 40px;
            height: 15px;
            left: 75%;
            top: 434px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        #epm_ctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 5px;
            top: 465px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;
            outline: none;
        }

        epm_label {
            position: absolute;
            width: 133px;
            height: 15px;
            left: 23px;
            top: 474px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #logout {
            position: absolute;
            width: 75px;
            height: 26px;
            left: 231px;
            top: 20px;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            border: none;

            color: #4A148C;
        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Settings</stext>

    <?php
    if (isset($_SESSION['loggedin'])) {
    ?>
        <form method="post">
            <input type="submit" id="logout" value="Log Out" name="logout">
        </form>
    <?php
    }
    if (isset($_POST['logout'])) {
        unset($_SESSION['loggedin']);
        echo '<script>window.location.replace("index.php");</script>';
    }
    ?>
    <general>General</general>
    <accent_ctn> </accent_ctn>
    <accent_label>Accent Color</accent_label>
    <accent_stat>Amethyst</accent_stat>
    <theme_ctn></theme_ctn>
    <theme_label>Theme</theme_label>
    <theme_stat>Adaptive</theme_stat>
    <lang_ctn></lang_ctn>
    <lang_label>Language</lang_label>
    <lang_stat>en-US</lang_stat>
    <ver_ctn></ver_ctn>
    <ver_label>System version</ver_label>
    <?php
    echo "<ver_stat>$version</ver_stat>";
    ?>

    <account>Account</account>
    <uname_ctn></uname_ctn>
    <uname_label>Username</uname_label>
    <?php
    echo "<uname_stat>$username</uname_stat>";
    ?>
    <!-- <acctype_ctn></acctype_ctn> -->
    <a href="/user/acctype.php">
        <button id="acctype_ctn"></button>
    </a>
    <acctype_label>Account type</acctype_label>
    <?php
    $role = $_SESSION['role'];
    if ($role == 1) {
        echo "<acctype_stat>Delivery</acctype_stat>";
    } else if ($role == 2) {
        echo "<acctype_stat>Admin</acctype_stat>";
    } else {
        echo "<acctype_stat>User</acctype_stat>";
    }
    ?>
    <a href="/user/cpw.php">
        <button id="cpw_ctn"></button>
    </a>
    <cpw_label>Change Password</cpw_label>

    <payment>Payment</payment>
    <button id="dpm_ctn"></button>
    <dpm_label>Default payment method</dpm_label>
    <dpm_stat>Paypal</dpm_stat>
    <button id="epm_ctn"></button>
    <epm_label>Edit payment methods</epm_label>
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
    echo "<script>location.replace('home.php');</script>";
}
if (isset($_POST['delivery'])) {
    echo "<script>location.replace('delivery.php');</script>";
}
if (isset($_POST['login'])) {
    echo "<script>location.replace('index.php');</script>";
}
if (isset($_POST['settings'])) {
    echo "<script>location.replace('settings.php');</script>";
}
?>

</html>