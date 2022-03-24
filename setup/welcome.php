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
            left: 28.8%;
            right: 29.07%;
            top: 40.64%;
            bottom: 54.31%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 41px;

            color: #7B1FA2;
        }

        #start {
            position: absolute;
            left: 32%;
            right: 32.27%;
            top: 55.17%;
            bottom: 37.32%;

            background: #E1BEE7;
            border-radius: 20px;
            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 18px;
            line-height: 21px;
            color: #7B1FA2;
            border: 0;
        }
    </style>
</head>

<body>
    <welcome>Welcome</welcome>

    <a href="/setup/signup.php">
        <button id="start">
            Get started
        </button>
    </a>
</body>