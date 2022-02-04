<!DOCTYPE html>
<?php
session_start();
include "../assets/vars.php";

if (isset($_SESSION['loggedin'])) {
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
            width: 74px;
            height: 22px;
            left: 7px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 22px;
            /* identical to box height */


            color: #000000;
        }

        etext {
            position: absolute;
            width: 32px;
            height: 15px;
            left: 25px;
            top: 110px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */


            color: #4A148C;
        }

        #ectn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 10px;
            top: 128px;

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

        utext {
            position: absolute;
            width: 61px;
            height: 15px;
            left: 24px;
            top: 166px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        #uctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 10px;
            top: 183px;

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

        ptext {
            position: absolute;
            width: 58px;
            height: 15px;
            left: 24px;
            top: 221px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        #pctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 10px;
            top: 238px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;
        }

        ctext {
            position: absolute;
            width: 102px;
            height: 15px;
            left: 24px;
            top: 276px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
        }

        #cctn {
            position: absolute;
            width: 301px;
            height: 33px;
            left: 10px;
            top: 296px;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;
        }

        #rbtn {
            position: absolute;
            width: 79px;
            height: 38px;
            left: 120px;
            top: 346px;

            background: #BA68C8;
            border-radius: 100px;
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;

            border: none;
        }

        errMsg {
            position: absolute;
            width: 142px;
            height: 15px;
            left: 86px;
            top: 427px;

            font-family: Inter;
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            display: flex;
            align-items: center;

            color: #000000;
        }
    </style>

</head>

<body>
    <stitle>tiferet</stitle>
    <stext>Register</stext>

    <form method="post">
        <etext>Email</etext>
        <input type="text" id="ectn" name="email">
        <utext>Username</utext>
        <input type="text" id="uctn" name="username">
        <ptext>Password</ptext>
        <input type="password" id="pctn" name="password">
        <ctext>Retype Password</ctext>
        <input type="password" id="cctn" name="confirm">
        <input type="submit" id="rbtn" value="Register" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['confirm'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $confirm = $_POST['confirm'];
            if ($password === $confirm) {
                $cemail = db_query("SELECT * FROM userdata WHERE email='$email'");
                $cuname = db_query("SELECT * FROM userdata WHERE username='$username'");
                $ecount = db_num_rows($cemail);
                $ucount = db_num_rows($cuname);
                    if ($ecount == 0 && $ucount == 0){
                        db_query("INSERT INTO `userdata`(`username`, `password`, `isdelivery`, `email`) VALUES ('$username','$password','0', '$email')");
                        header("Location: /home.php")
                    } else if ($ecount == 0){
                        echo "<errMsg>Please use another username.</errMsg>";
                    } else {
                        echo "<errMsg>Email already registered.</errMsg>";
                    }
            } else {
                echo "<errMsg>Passwords do not match!</errMsg>";
            }
        } else {
            echo "<errMsg>Please fill all fields.</errMsg>";
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