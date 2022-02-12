<!DOCTYPE html>

<?php
session_start();
include "../assets/vars.php";

if (empty($_SESSION['loggedin'])) {
    header("Location: /home.php");
}
$username = $_SESSION['username'];
?>

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


        tpString {
            /* total payout string */
            position: absolute;
            width: 72px;
            height: 15px;
            left: 15.9375%;
            top: 84px;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        #tpCtn {
            /* button-like total payout container */
            position: absolute;
            width: 72.8125%;
            height: 110px;
            left: 13.4375%;
            top: 99px;

            background: #E1BEE7;
            border-radius: 20px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 75px;
            line-height: 91px;
            /* identical to box height */

            text-align: center;

            color: #4A148C;
            border: none;
        }

        .dsCtn {
            position: absolute;
            width: 84.0625%;
            height: 47.148%;
            left: 7.8125%;
            top: 233px;

            background: #E1BEE7;
            border-radius: 20px;
        }

        .dsText {
            /* position: absolute; */
            width: 105px;
            height: 15px;
            left: 15.9375%;
            top: 245px;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: center;

            color: #000000;
        }

        .dvr {
            height: 38px;
        }

        .statCtn {
            position: absolute;
            width: 90%;
            height: 33px;
            left: 5%;

            background: #CE93D8;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 100%;
            /* identical to box height */

            color: #000000;
        }

        #statBtn {
            /* status number container */
            width: 45px;
            height: 33px;
            float: right;
            line-height: 33px;
            background: #BA68C8;
            border-radius: 20px;
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            border: none;
            color: #FFFFFF;
        }

        statStr {
            height: 15px;
            left: 25px;
            top: 109px;

            font-family: Inter;
            font-style: normal;
            font-weight: medium;
            font-size: 12px;
            line-height: 33px;
            /* identical to box height */

            text-align: right;

            color: #000000;
        }

        #backBtn {
            position: absolute;
            width: 72px;
            height: 5.28169014084507%;
            left: 1.875%;
            top: 92.25352112676056%;

            background: #E1BEE7;
            border-radius: 100px;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;


            text-align: center;

            color: #000000;
        }

        #goBtn {
            position: absolute;
            width: 72px;
            height: 5.28169014084507%;
            left: 72.5%;
            top: 92.25352112676056%;

            background: #E1BEE7;
            border-radius: 100px;
            border: none;

            font-family: Inter;
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 17px;


            text-align: center;

            color: #000000;
        }
    </style>
</head>

<?php
$prq = db_query("SELECT payrate FROM userdata WHERE username='$username'");
while ($row = $prq->fetch_assoc()) {
    $payrate = $row['payrate'];
}
$jobCount = db_num_rows(db_query("SELECT handler FROM food WHERE istaken='1' AND handler='$username'"));
$payTotal = $jobCount * $payrate;
?>

<body>
    <stitle>tiferet</stitle>
    <stext>Payout page</stext>
    <tpString>Total Payout</tpString>
    <?php
    echo "<button id='tpCtn'>$$payTotal</button>";
    ?>
    <div class='dsCtn'>
        <p id='dsText'> &nbsp; &nbsp;Detailed Statistics</p>
        <div class='statCtn'>
            &nbsp; &nbsp;<statStr>Delivered Orders</statStr>
            <?php
            echo "<button id='statBtn'>$jobCount</button>";
            ?>
        </div>
        <div class='dvr'></div>
        <div class='statCtn'>
            &nbsp; &nbsp;<statStr>Payout Per Job</statStr>
            <?php
            echo "<button id='statBtn'>$$payrate</button>";
            ?>
        </div>
        <div class='dvr'></div>
        <div class='statCtn'>
            &nbsp; &nbsp;<statStr>Total</statStr>
            <?php
            echo "<button id='statBtn'>$$payTotal</button>";
            ?>
        </div>
    </div>

    <a href='/delivery.php'>
        <button id='backBtn'>
            <- Back </button>
    </a>

    <button id='goBtn'>
        Go -> </button>
</body>