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

        tyCtn {
            position: absolute;
            width: 63px;
            height: 15px;
            left: 129px;
            top: 183px;

            font-family: Inter;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #qrCode {
            position: absolute;
            width: 150px;
            height: 148.83px;
            left: 85px;
            top: 210px;
        }

        #doneBtn {
            position: absolute;
            width: 120px;
            height: 30px;
            left: 100px;
            top: 392px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;

        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>All done!</stext>

    <tyCtn>Thank you!</tyCtn>
    <img id='qrCode' src='/assets/like.gif'>
    <a href="/delivery.php">
        <button id='doneBtn'>Finish</button>
    </a>

</body>

</html>