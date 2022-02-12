<!DOCTYPE html>
<?php
session_start();
include "../assets/vars.php";

if (empty($_SESSION['loggedin'])) {
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

        #opctn {
            position: absolute;
            width: 93.75%;
            height: 33px;
            left: 3.125%;
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

        #npctn {
            position: absolute;
            width: 93.75%;
            height: 33px;
            left: 3.125%;
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

        #cpctn {
            position: absolute;
            width: 93.75%;
            height: 33px;
            left: 3.125%;
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
            width: 93.75%;
            height: 33px;
            left: 3.125%;
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
            top: 53%;

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
    <stext>Change Password</stext>

    <form method="post">
        <etext>Old password</etext>
        <input type="password" id="opctn" name="oldpass">
        <utext>New Password</utext>
        <input type="password" id="npctn" name="newpass">
        <ptext>Confirm Password</ptext>
        <input type="password" id="cpctn" name="confirm">
        <input type="submit" id="rbtn" value="Change" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['oldpass']) && !empty($_POST['newpass']) && !empty($_POST['confirm'])) {
            $oldpass = $_POST['oldpass'];
            $newpass = $_POST['newpass'];
            $confirm = $_POST['confirm'];
            $username = $_SESSION['username'];
            if ($password === $confirm) {
                $query = db_query("SELECT * FROM userdata WHERE username='$username' AND password='$oldpass'");
                $qcount = db_num_rows($query);
                if ($qcount > 0) {
                    db_query("UPDATE userdata SET password='$newpass' WHERE username='$username' AND password='$oldpass'");
                    echo "<errMsg>Password changed.</errMsg>";
                } else {
                    echo "<errMsg>Wrong current password.</errMsg>";
                }
            } else {
                echo "<errMsg>Both passwords do not match.</errMsg>";
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
