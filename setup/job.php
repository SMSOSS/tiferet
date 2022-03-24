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
            left: 13.07%;
            right: 12.8%;
            top: 17.36%;
            bottom: 78.08%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 37px;
            /* identical to box height */


            color: #7B1FA2;
        }

        subtag {
            position: absolute;
            left: 13.07%;
            right: 35.73%;
            top: 21.92%;
            bottom: 75.86%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #foodie {
            position: absolute;
            left: 5.87%;
            right: 5.6%;
            top: 27.96%;
            bottom: 54.8%;

            background: #E1BEE7;
            border-radius: 20px;
            position: absolute;
            border: none;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }

        bold {
            font-weight: 700;
        }

        foodie-text {
            position: absolute;
            left: 13.6%;
            right: 16.8%;
            top: 33.25%;
            bottom: 60.1%;


            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #000000;
        }

        #deliver {
            position: absolute;
            left: 5.87%;
            right: 5.6%;
            top: 49.01%;
            bottom: 33.74%;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;
        }

        deliver-text {
            position: absolute;
            left: 13.6%;
            right: 16.8%;
            top: 54.31%;
            bottom: 39.04%;

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
    <tagline>One last question.</tagline>
    <subtag>How will you use tiferet?</subtag>

    <form method="post">

        <input type=submit id="foodie" name="foodie" value="">
        <foodie-text>I'm a <bold>foodie</bold>.<br>I will use tiferet to deliver my food <br> from other takeaway platforms.</foodie-text>

        <input type=submit id="deliver" name="deliver" value="">

        <deliver-text>I’m a <bold>deliveryman</bold>.<br>I will help tiferet by delivering food to<br>it’s designated lockers.</deliver-text>
    </form>

    <?php
    $email = $_SESSION['email'];

    if (isset($_POST['deliver'])) {
        db_query("UPDATE userdata SET isdeliver=1 WHERE email='$email'");
        $_SESSION['isdeliver'] = 0;
        echo "<script>window.location.href = '/setup/finish.php';</script>";
    }

    if (isset($_POST['foodie'])) {
        db_query("UPDATE userdata SET isdeliver=0 WHERE email='$email'");
        $_SESSION['isdeliver'] = 1;
        echo "<script>window.location.href = '/setup/finish.php';</script>";
    }
    ?>
</body>