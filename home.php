<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

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
        <input type="image" id="oimg" src="/assets/source_icons_bag.svg" name="order">
        <otext>Order</otext>
        <dctr></dctr>
        <input type="image" id="dimg" src="/assets/source_icons_delivery-truck.svg" name="delivery">
        <dtext>Delivery</dtext>
        <lctr></lctr>
        <input type="image" id="limg" src="/assets/source_icons_home-user.svg" name="login">
        <ltext>Login</ltext>
        <sectr></sectr>
        <input type="image" id="seimg" src="/assets/source_icons_settings.svg" name="settings">
        <setext>Settings</setext>
    </form>
</navbar>

</html>