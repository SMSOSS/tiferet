<!DOCTYPE html>

<head>
    <title>Add new restaurant</title>
    <style>
        @font-face {
            font-family: HarmonyBold;
            src: url('../fonts/bold.ttf');
        }

        @font-face {
            font-family: HarmonyReg;
            src: url('../fonts/regular.ttf');
        }

        @font-face {
            font-family: HarmonyLight;
            src: url('../fonts/light.ttf');
        }

        h1 {
            text-align: center;
            font-family: HarmonyBold;
        }

        h3 {
            text-align: center;
            font-family: HarmonyLight
        }

        input[type=submit] {
            padding: 5px 15px;
            background: #DBF9FC;
            border: 1px solid black;
            cursor: pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            font-family: HarmonyBold;
            font-size: 15px;
        }

        input[type=text] {
            padding: 5px 15px;
            border: 1px solid black;
            cursor: pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            font-family: HarmonyLight;
            font-size: 15px;
        }

        body {
            background-color: #DBF9FC;
        }


        h2 {
            text-align: center;
            font-family: HarmonyReg
        }

        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #40E0D0;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: center;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            /* background-color: #ddd;
  color: black; */
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #8F00FF;
            color: white;
        }
    </style>

</head>

<body>
    <h1>Add new shop</h1>
    <h3>
    <?php
    session_start();
    if (!isset($_SESSION['aloggedin'])) {
        header('Location: /cpanel/login.php');
        exit;
    }
    include("../vars.php");
    echo '<form method=post>';
    echo "Shop name: <br>";
    echo '<input type="text" name="shop">';
    echo "<br>";
    echo "Shop coordinates: <br>";
    echo '<input type="text" name="location">';
    echo "<br>";
    echo '<input type="submit" value="Add restaurant" name="add">';
    echo '</form>';
    if (isset($_POST['add'])) {
        if (!empty($_POST['shop']) && !empty($_POST['location'])) {
            $shop = $_POST['shop'];
            $location = $_POST['location'];
            $passcode = mt_rand(1000, 9999);
            db_query("INSERT INTO `shopdata`(`name`, `passcode`, `location`) VALUES ('$shop','$location','$passcode');");
            echo "Added restaurant $shop with password $passcode";
        } else {
            echo "Fields are not being filled? Check your input and try again.";
        }
    }
    ?>
    </h3>
</body>
<footer>
    <h3>
        <form method='post'>
            <input type="submit" value="Back" name="back">
        </form>
        <?php
        if (isset($_POST['back'])) {
            header('Location: /cpanel/toolbox.php');
        }
        ?>
    </h3>
</footer>

</html>