<!DOCTYPE html>

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
            text-align: center;

            color: #000000;
        }

        stext {
            position: absolute;
            width: 120px;
            height: 19px;
            left: 7px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;
            text-align: center;

            color: #000000;
        }

        suggest_text {
            position: absolute;
            width: 200px;
            height: 26px;
            left: 9px;
            top: 150px;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 22px;

            color: #000000;
        }

        suggest_1 {
            position: absolute;
            width: 91px;
            height: 79px;
            left: 7px;
            top: 174px;

            background: #AB47BC;
            border-radius: 20px;

        }

        suggest_2 {

            position: absolute;
            width: 91px;
            height: 79px;
            left: 109px;
            top: 174px;

            background: #AB47BC;
            border-radius: 20px;
        }

        suggest_3 {
            position: absolute;
            width: 91px;
            height: 79px;
            left: 211px;
            top: 174px;

            background: #AB47BC;
            border-radius: 20px;
        }

        newest_1 {
            position: absolute;
            width: 91px;
            height: 79px;
            left: 7px;
            top: 298px;

            background: #AB47BC;
            border-radius: 20px;
        }

        newest_2 {
            position: absolute;
            width: 91px;
            height: 79px;
            left: 211px;
            top: 298px;

            background: #AB47BC;
            border-radius: 20px;
        }

        newest_3 {
            position: absolute;
            width: 91px;
            height: 79px;
            left: 109px;
            top: 298px;

            background: #AB47BC;
            border-radius: 20px;
        }

        newest_text {
            position: absolute;
            width: 193px;
            height: 22px;
            left: 9px;
            top: 265px;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 22px;
            color: #000000;
        }

        username {
            position: absolute;
            width: 41px;
            height: 19px;
            left: 124px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;
            text-align: center;

            color: #8E24AA;
        }

        #cart {
            position: absolute;
            width: 24px;
            height: 24px;
            left: 268px;
            top: 17px;
        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Welcome back,</stext>
    <username>User</username>
    <form method="post">
        <input type="image" id="cart" src="/assets/source_icons_cart.svg" name="cart">
    </form>
    <suggest_text>Recommended</suggest_text>
    <suggest_1></suggest_1>
    <suggest_2></suggest_2>
    <suggest_3></suggest_3>
    <newest_text>Newest in stock</newest_text>
    <newest_1></newest_1>
    <newest_2></newest_2>
    <newest_3></newest_3>
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