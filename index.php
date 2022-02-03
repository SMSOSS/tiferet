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

        logtext {
            position: absolute;
            width: 53px;
            height: 22px;
            left: 7px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 22px;
            /* identical to box height */

            text-align: center;

            color: #000000;

        }

        input[type=text] {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 7px;
            top: 147px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        utext {
            position: absolute;
            width: 61px;
            height: 15px;
            left: 14px;
            top: 125px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            text-align: center;

            color: #4A148C;
        }

        input[type=password] {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 7px;
            top: 200px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        ptext {
            position: absolute;
            width: 58px;
            height: 15px;
            left: 14px;
            top: 185px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;

        }

        body {
            position: relative;
            width: 320px;
            height: 568px;

            background: #F3E5F5;
        }

        input[type=submit] {
            position: absolute;
            width: 79px;
            height: 38px;
            left: 170px;
            top: 246px;

            background: #BA68C8;
            border-radius: 100px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;
        }

        ltext {
            position: absolute;
            width: 38px;
            height: 17px;
            left: 191px;
            top: 257px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        rbtn {
            position: absolute;
            width: 79px;
            height: 38px;
            left: 65px;
            top: 247px;

            background: #BA68C8;
            border-radius: 100px;

        }

        rtext {
            position: absolute;
            width: 58px;
            height: 17px;
            left: 75px;
            top: 257px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 17px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }
    </style>
</head>

<body>
    <stitle>tiferet</stitle>
    <logtext>Log in</logtext>
    <form>
        <utext>Username</utext>
        <input type="text" name="username"><br>

        <ptext>Password</ptext>
        <input type="password" name="password"><br>
        <input type="submit" value="hello" name="login">
    </form>
    <!-- <rbtn></rbtn>
    <rtext>Register</rtext> -->

</body>

</html>