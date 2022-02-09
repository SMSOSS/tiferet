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
            width: 86px;
            height: 17px;
            left: 2.1875%;
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
            left: 5.3125%;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        cc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 31.875%;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        dc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 58.125%;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        fc {
            position: absolute;
            width: 15px;
            height: 15px;
            left: 86.875%;
            top: 76px;
            border-radius: 50%;
            background: #BA68C8;
        }

        ot {
            position: absolute;
            width: 44px;
            height: 15px;
            left: 0.625%;
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
            left: 27.5%;
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
            left: 52.5%;
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
            left: 82.1875%;
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
            left: 5, 625%;
            top: 77px;

        }

        status {
            position: absolute;
            width: 159px;
            left: calc(50% - 159px/2 + 0.5px);
            top: 284px;
            bottom: 269px;

            font-family: Inter;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #00000
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
    <status>Your food is being prepared.</status>
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