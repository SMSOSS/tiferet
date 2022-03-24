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

        thankq {
            position: absolute;
            left: 27.2%;
            right: 27.2%;
            top: 37.32%;
            bottom: 58.13%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 37px;
            /* identical to box height */


            color: #7B1FA2;
        }

        thankq-cap {
            position: absolute;
            left: 27.2%;
            right: 30.4%;
            top: 41.87%;
            bottom: 55.91%;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 18px;

            color: #7B1FA2;
        }

        #lessgo {
            position: absolute;
            left: 31.2%;
            right: 33.07%;
            top: 55.17%;
            bottom: 37.32%;

            background: #E1BEE7;
            border-radius: 20px;
            border: none;

            font-family: 'Helvetica';
            font-style: normal;
            font-weight: 300;
            font-size: 20px;
            line-height: 23px;

            color: #7B1FA2;
        }
    </style>
</head>

<body>
    <thankq>Thank you!</thankq>
    <thankq-cap>Your account is ready.</thankq-cap>

        <?php
        $isdeliver = $_SESSION['isdeliver'];

        if ($isdeliver == 1) {
            echo "<a href='/deliver/home.php'>";
        } else {
            echo "<a href='/user/home.php'>";
        }
        ?>
    <button id="lessgo">
        Let's go!
    </button>
    </a>
 </body>