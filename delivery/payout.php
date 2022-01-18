<!DOCTYPE html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <style>
                @font-face {
                        font-family: HarmonyBold;
                        src: url('/fonts/bold.ttf');
                }

                @font-face {
                        font-family: HarmonyReg;
                        src: url('/fonts/regular.ttf');
                }

                @font-face {
                        font-family: HarmonyLight;
                        src: url('/fonts/light.ttf');
                }

                h1 {
                        text-align: center;
                        font-family: HarmonyBold
                }

                h3 {
                        text-align: center;
                        font-family: HarmonyLight
                }

                h2 {
                        text-align: center;
                        font-family: HarmonyReg
                }

                a {
                        font-family: HarmonyReg
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

                body {
                        background-color: #DBF9FC;
                }

                hr.rounded {
                        border-top: 4px solid #006666;
                        border-radius: 5px;
                }
        </style>
</head>

<body>

        <title>Deliver Panel</title>
        <h1>Deliver Panel</h1>

        <h3>
                <?php

                session_start();
                if (!isset($_SESSION['loggedin'])) {
                        header('Location: /delivery/login.php');
                        exit;
                }

                $username = $_SESSION['username'];
                echo "welcome $username ! <br>";
                /* start import */
                include("../vars.php");
                ?>
        </h3>

        <?php
        $query = db_query("SELECT * FROM food WHERE handler='$username' AND istaken='1'");
        $count = db_num_rows($query);
        $prc = db_query("SELECT payrate FROM userdata WHERE username='$username'");
        while ($row = $prc->fetch_assoc()) {
                $payrate = $row['payrate'];
        }
        echo "<h2>Payout Calculator</h2>";
        echo "<h3>Total finished deliveries: $count</h3>";
        echo "<h3>Payout Rate: $$payrate</h3>";
        $payout = $payrate * $count;
        echo "<h3>Total payout: $$payout</h3>";

        echo "<h3>";
        echo "<form method='post'>";
        echo '<input type="submit" value="Checkout" name="checkout">';
        echo " ";
        echo '<input type="submit" value="Back" name="back">';
        echo " ";
        echo '<input type="submit" value="Log Out" name="logout">';
        echo '</form>';
        if (isset($_POST['checkout'])) {
                echo "feature checkout not yet implement in debug <br>"; // comment this line and add your own hooks for payout
        }
        if (isset($_POST['back'])) {
                header('Location: /delivery.php');
        }
        if (isset($_POST['logout'])) {
                header("Location: /delivery/login.php");
        }
        echo "</h3>";
        ?>
</body>