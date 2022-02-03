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

        statbar {
            position: absolute;
            left: 1.88%;
            right: 4.06%;
            top: 13.38%;
            bottom: 83.98%;

            background: #E1BEE7;
            border-radius: 20px;
        }

        oc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 17px;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        cc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 102px;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        dc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 186px;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        fc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 278px;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        ot {
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

        ct {
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

        dt {
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

        ft {
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

        #tick {
            position: absolute;
            width: 13px;
            height: 13px;
            left: 18px;
            top: 77px;

        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Cooking...</stext>
    <statbar>
    </statbar>
    <oc></oc>
    <ot>Ordered</ot>
    <img id="tick" src="/assets/source_icons_check.svg">
    <cc></cc>
    <ct>Cooked</ct>
    <dc></dc>
    <dt>Delivered</dt>
    <fc></fc>
    <ft>Taken</ft>
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