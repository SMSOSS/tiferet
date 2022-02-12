<!DOCTYPE html>
<?php
session_start();
include "../assets/vars.php";
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
            background: #F3E5F5;
        }

        stitle {
            position: absolute;
            width: 75px;
            height: 29px;
            left: 2.1875%;
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
            width: 168px;
            height: 19px;
            left: 2.1875%;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;

            color: #000000;
        }

        nctr {
            position: absolute;
            width: 93.75%;
            height: 100px;
            left: 3.125%;
            top: 79px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        ntag {
            position: absolute;
            width: 57px;
            height: 19px;
            left: 7.8125%;
            top: 93px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;

            color: #000000;
        }

        ndesc {
            position: absolute;
            width: 128px;
            height: 45px;
            left: 7.8125%;
            top: 112px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;

            color: #000000;
        }

        #npill {
            position: absolute;
            width: 94px;
            height: 19px;
            left: 62.1875%;
            top: 93px;

            background: #CE93D8;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            color: #4A148C;

            border: none;
        }

        rctr {
            position: absolute;
            width: 93.75%;
            height: 100px;
            left: 3.125%;
            top: 193px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        rtag {
            position: absolute;
            width: 65px;
            height: 19px;
            left: 7.8125%;
            top: 207px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;

            color: #000000;
        }

        rdesc {
            position: absolute;
            width: 173px;
            height: 45px;
            left: 7.8125%;
            top: 226px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;

            color: #000000;
        }

        #rpill {
            position: absolute;
            width: 94px;
            height: 19px;
            left: 62.1875%;
            top: 207px;

            background: #CE93D8;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */


            color: #4A148C;

            border: none;
        }

        vctr {
            position: absolute;
            width: 93.75%;
            height: 100px;
            left: 3.125%;
            top: 307px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        vtag {
            position: absolute;
            width: 27px;
            height: 19px;
            left: 7.8125%;
            top: 321px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;

            color: #000000;
        }

        vdesc {
            position: absolute;
            width: 163px;
            height: 45px;
            left: 7.8125%;
            top: 340px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;

            color: #000000;
        }

        #vpill {
            position: absolute;
            width: 94px;
            height: 19px;
            left: 62.1875%;
            top: 321px;

            background: #CE93D8;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            color: #4A148C;
            border: none;
        }

        finMsg {
            position: absolute;
            width: 211px;
            height: 15px;
            left: 16.875%;
            top: 464px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */
            color: #000000;
        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Change account type</stext>

    <form method="post">
        <nctr></nctr>
        <ntag>Normal</ntag>
        <ndesc>- Deliveries<br>- Order food<br>- Ad-free experience<br></ndesc>
        <?php
        if ($_SESSION['role'] != 0) {
            echo '<input type="submit" id="npill" name="buser" value="Switch">';
        } else {
            echo '<input type="submit" id="npill" name="current" value="CURRENT">';
        }
        ?>
        <rctr></rctr>
        <rtag>Delivery</rtag>
        <rdesc>- All benefits of normal<br>- Get paid for delivering food<br>- Stable Pay rate</rdesc>
        <?php
        if ($_SESSION['role'] != 1) {
            echo '<input type="submit" id="rpill" name="bdeliver" value="Switch">';
        } else {
            echo '<input type="submit" id="rpill" name="current" value="CURRENT">';
        }
        ?>
        <vctr></vctr>
        <vtag>VIP</vtag>
        <vdesc>- All benefits of normal<br>- Get 5% discount on order<br>- Birthday Benefits</vdesc>
        <?php
        if ($_SESSION['role'] != 3) {
            echo '<input type="submit" id="vpill" name="bvip" value="Coming soon">';
        } else {
            echo '<input type="submit" id="vpill" name="current" value="CURRENT">';
        }
        ?>
    </form>

    <?php
    $username = $_SESSION['username'];
    if (isset($_POST['buser'])) {
        db_query("UPDATE userdata SET isdelivery='0' WHERE username='$username'");
        echo "<finMsg>Change will take effect after re-login.</finMsg>";
    }
    if (isset($_POST['bdeliver'])) {
        db_query("UPDATE userdata SET isdelivery='1' WHERE username='$username'");
        echo "<finMsg>Change will take effect after re-login.</finMsg>";
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