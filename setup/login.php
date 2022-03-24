<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <?php
    include("../assets/utils.php");
    ?>
    <style>
        body {
            background: #F3E5F5;
        }

        welcome {
            position: absolute;
            left: 14.67%;
            right: 23.73%;
            top: 25.62%;
            bottom: 67.24%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 37px;

            color: #7B1FA2;
        }

        mini {
            font-size: 19.7775px;
            font-weight: 300;
        }

        email {
            position: absolute;
            left: 14.67%;
            right: 64%;
            top: 40.89%;
            bottom: 56.9%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        passcode {
            position: absolute;
            left: 14.67%;
            right: 55.47%;
            top: 50.86%;
            bottom: 46.92%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #ectn {
            position: absolute;
            left: 12%;
            right: 12%;
            top: 44.83%;
            bottom: 50.86%;

            background: #E1BEE7;
            border-radius: 5px;
            border: 0;
        }

        #pctn {
            position: absolute;
            left: 12%;
            right: 12%;
            top: 54.8%;
            bottom: 40.89%;

            background: #E1BEE7;
            border-radius: 5px;
            border: 0;
        }

        #gobtn {
            position: absolute;
            left: 72.8%;
            right: 1.6%;
            top: 93.97%;
            bottom: 1.11%;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            border: 0;
        }

        error {
            position: absolute;
            left: 26.4%;
            right: 26.4%;
            top: 70.44%;
            bottom: 27.34%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }
    </style>

    <head>

    <body>
        <welcome>Welcome back.<br>
            <mini>Log in</mini>
        </welcome>

        <form method="post">

            <email>Your email:</email>
            <passcode>Your password:</passcode>
            <input type=text id="ectn" name="email">
            <input type=password id="pctn" name="password">

            <input type="submit" id="gobtn" value="Login" name="login">
        </form>



        <?php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = db_query("SELECT isdeliver FROM userdata WHERE email='$email' AND password='$password'");
            $valid = db_num_rows($query);

            while ($row = $query->fetch_assoc()) {
                $isdeliver = $row['isdeliver'];
            }

            if ($valid == 1) {
                $_SESSION['isdeliver'] = $isdeliver;
                if ($isdeliver == 1 ) {
                    echo "<script>window.location.href = '/delivery/home.php';</script>";
                } else {
                    echo "<script>window.location.href = '/user/home.php';</script>";
                }
            } else {
                echo "<error>Wrong username / password.</error>";
            }

        }
        ?>
        
    </body>