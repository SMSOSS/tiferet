<!DOCTYPE html>

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
            text-align: center;

            color: #000000;
        }

        stext {
            position: absolute;
            width: 120px;
            height: 19px;
            left: 7px;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;
            text-align: center;

            color: #000000;
        }

        username {
            position: absolute;
            width: 41px;
            height: 19px;
            left: 40%;
            top: 46px;

            font-family: Inter;
            font-style: normal;
            font-weight: bold;
            font-size: 16px;
            line-height: 19px;

            color: #8E24AA;
        }

        #sctr {
            width: 300px;
            height: 100px;

            background: #E1BEE7;
            border-radius: 20px;

        }

        .stext {
            left: 100%;
            font-family: Inter;
            font-style: normal;
            font-weight: medium;
            font-size: 12px;
            line-height: 15px;
        }

        .sdvr {
            height: 25px;
        }

        .fsdvr {
            height: 79px;
        }

        #cart {
            position: absolute;
            width: 24px;
            height: 24px;
            left: 268px;
            top: 17px;
        }

        shop_name {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<?php
include "assets/vars.php";
?>

<body>
    <div class="fsdvr">
        <stitle>tiferet</stitle>
        <?php
        if (isset($_SESSION['loggedin'])) {
        ?>
            <stext>Welcome back,</stext>
        <?php
            echo "<username>$username</username>";
        }
        ?>
        <form method="post">
            <input type="image" id="cart" src="/assets/source_icons_cart.svg" name="cart">
        </form>
    </div>
    <?php
    $query = db_query("SELECT name, shopimg FROM shopdata WHERE isdisable=0");
    $count = db_num_rows($query);
    while ($row = $query->fetch_assoc()) {
        $imgurl = $row['shopimg'];
        $name = $row['name'];
        echo "<img src='$imgurl' id='sctr'>";
        echo "<div class='sdvr'>";
        echo "&nbsp; &nbsp; $name";
        echo "</div>";
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
    echo "<script>location.replace('home.php');</script>";
}
if (isset($_POST['delivery'])) {
    echo "<script>location.replace('delivery.php');</script>";
}
if (isset($_POST['login'])) {
    echo "<script>location.replace('index.php');</script>";
}
if (isset($_POST['settings'])) {
    echo "<script>location.replace('settings.php');</script>";
}
?>

</html>