<!DOCTYPE html>

<?php
session_start();
include "../assets/vars.php";
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
            width: 71px;
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

        sname {
            position: absolute;
            width: 75px;
            height: 19px;
            left: 80px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;
            color: #8E24AA;
        }

        .fsdvr {
            /* first divider, used to separate text and menu item */
            height: 79px;
        }

        .fdvr {
            /* food divider, foodname container */
            width: 301px;
            height: 25px;
            left: 3px;
            background: #E1BEE7;
            border-radius: 20px;
            text-decoration: none;
        }

        fprice {
            left: 263px;
            top: 109px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 15px;
            /* identical to box height */

            text-align: right;

            color: #4A148C;
        }

        fname {
            height: 15px;
            left: 25px;
            top: 109px;

            font-family: Inter;
            font-style: normal;
            font-weight: medium;
            font-size: 18px;
            line-height: 15px;
            /* identical to box height */

            text-align: right;

            color: #000000;
        }

        price {
            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            line-height: 15px;
            /* identical to box height */

            text-align: right;

            color: #4A148C;
        }

        .sdvr {
            /* divider to divide between fdvr */
            height: 7px;
        }

        #nohl {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="fsdvr">
        <stitle>tiferet</stitle>
        <stext>Menu for</stext>
        <?php
        $name = $_GET['shop'];
        echo "<sname>$name</sname>";
        ?>
    </div>
    <?php
    $query = db_query("SELECT food, price FROM menu WHERE shop='$name' AND soldout='0'");
    while ($row = $query->fetch_assoc()) {
        $food = $row['food'];
        $price = $row['price'];
        echo "<a id='nohl' href='/user/add-to-cart.php?order=$food&shop=$name'>";
        echo "<div class='fdvr'>";
        echo "&nbsp; &nbsp; <fname>$food - <price>$$price</price></fname>";
        echo "</div>";
        echo "<div class='sdvr'>";
        echo "</div>";
    }
    ?>

</body>

</html>