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

        tagline {
            position: absolute;
            left: 14.67%;
            right: 14.4%;
            top: 25.62%;
            bottom: 65.27%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 37px;

            color: #7B1FA2;
        }

        email {
            position: absolute;
            left: 14.67%;
            right: 48.27%;
            top: 36.33%;
            bottom: 61.45%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #email-ctn {
            position: absolute;
            left: 12%;
            right: 12%;
            top: 40.27%;
            bottom: 55.42%;

            background: #E1BEE7;
            border-radius: 5px;
            border: 0;
        }

        name {
            position: absolute;
            left: 14.67%;
            right: 49.33%;
            top: 46.31%;
            bottom: 51.48%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #name-ctn {
            position: absolute;
            left: 12%;
            right: 12%;
            top: 50.25%;
            bottom: 45.44%;

            background: #E1BEE7;
            border-radius: 5px;
            border: 0;
        }

        pass {
            position: absolute;
            left: 14.67%;
            right: 54.4%;
            top: 56.28%;
            bottom: 41.5%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #pass-ctn {
            position: absolute;
            left: 12%;
            right: 12%;
            top: 60.22%;
            bottom: 35.47%;

            background: #E1BEE7;
            border-radius: 5px;
            border: 0;
        }

        confirm {
            position: absolute;
            left: 14.67%;
            right: 49.07%;
            top: 66.26%;
            bottom: 31.53%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #confirm-ctn {
            position: absolute;
            left: 12%;
            right: 12%;
            top: 70.2%;
            bottom: 25.49%;

            background: #E1BEE7;
            border-radius: 5px;
            border: none;
        }

        #back {
            position: absolute;
            left: 3.2%;
            right: 71.2%;
            top: 93.97%;
            bottom: 1.11%;

            background: #E1BEE7;
            border-radius: 20px;
            border: 0;
            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }

        #next {
            position: absolute;
            left: 72.8%;
            right: 1.6%;
            top: 93.97%;
            bottom: 1.11%;

            background: #E1BEE7;
            border-radius: 20px;
            border: 0;
            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }

        error {
            position: absolute;
            left: 25.6%;
            right: 25.33%;
            top: 80.17%;
            bottom: 17.61%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }
    </style>
</head>

<body>
    <tagline>Let's get to<br>know each other.</tagline>
    <form method="post">

        <email>What's your email?</email>
        <name>What's your name?</name>
        <pass>Set a password:</pass>
        <confirm>Confirm password:</confirm>

        <input type=text id="email-ctn" name="email">
        <input type=text id="name-ctn" name="name">
        <input type=password id="pass-ctn" name="pass">
        <input type=password id="confirm-ctn" name="confirm">

        <input type="submit" id="next" value="Next" name="next">
    </form>

    <a href="/setup/welcome.php">
        <button id="back">
            Back
        </button>
    </a>

    <?php
    if (isset($_POST['next'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];

        $existing = db_num_rows(db_query("SELECT * FROM userdata WHERE email='$email'"));

        if (!empty($email) && !empty($name) && !empty($pass) && !empty($confirm)) {
            if ($existing == 0) {
                if ($pass === $confirm) {
                    db_query("INSERT INTO `userdata`(`email`, `password`, `username`) VALUES ('$email','$pass','$name') ");
                    $_SESSION['email'] = $email;
                    echo "<script>window.location.href = '/setup/job.php';</script>";
                } else {
                    echo "<error>Passwords doesn't match.</error>";
                }
            } else {
                echo "<error>Account already exists.<br>Please login instead.</error>";
            }
        } else {
            echo "<error>Please fill in all blanks.</error>";
        }
    }
    ?>
</body>