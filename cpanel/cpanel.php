<!DOCTYPE html>
<html>

<head>
  <title>Control Panel</title>
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
      font-family: HarmonyReg
    }

    h2 {
      text-align: center;
      font-family: HarmonyReg
    }

    h4 {
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

    body {
      background-color: #DBF9FC;
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

  <h1>Control Panel </h1>
  <h3>
    <?php

session_start();
if (!isset($_SESSION['aloggedin'])) {
    header('Location: /cpanel/login.php');
    exit;
}

$username = $_SESSION['username'];
echo "welcome $username ! <br>";
?>
  </h3>


  <h2>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="/cpanel/toolbox.php">Toolbox</a>
      <a href="/cpanel/login.php">Log Out</a>
    </div>
  </h2>

  <h2> Status </h2>

  <?php
include "../vars.php";
// variable start
$unum = db_num_rows(db_query("SELECT * FROM userdata")); // total users
$dunum = db_num_rows(db_query("SELECT * FROM userdata WHERE isdisabled=1")); // disabled users
$denum = db_num_rows(db_query("SELECT * FROM userdata WHERE isdelivery=1")); // delivery users
$adnum = db_num_rows(db_query("SELECT * FROM userdata WHERE isdelivery=2")); // admins
$snum = db_num_rows(db_query("SELECT * FROM shopdata")); // total shops
$menum = db_num_rows(db_query("SELECT * FROM menu")); // total num in menu
$sunum = db_num_rows(db_query("SELECT * FROM menu WHERE soldout='1'")); // sold out food
$onum = db_num_rows(db_query("SELECT * FROM food")); // total number of food
$ponum = db_num_rows(db_query("SELECT * FROM food WHERE NOT istaken='1'")); // total number of food pending
$pcnum = db_num_rows(db_query("SELECT * FROM food WHERE istaken='0' AND NOT iscooked='1'")); // pending cook
$pdnum = db_num_rows(db_query("SELECT * FROM food WHERE istaken='0' AND iscooked='1' AND NOT isdeliver='1'")); // pending deliveries
$plnum = db_num_rows(db_query("SELECT * FROM food WHERE istaken='0' AND iscooked='1' AND isdeliver='1'")); // pending claim
$fnum = db_num_rows(db_query("SELECT * FROM food WHERE istaken='1'")); // finish order
$tlnum = db_num_rows(db_query("SELECT * FROM lockerdata")); // locker count
$olnum = db_num_rows(db_query("SELECT * FROM lockerdata WHERE isoccupy='1'")); // occupied locker count
// variable end
echo "<h3> User data </h3>";
echo "<h4>";
echo "Number of users: $unum <br>";
echo "Number of admins: $adnum <br>";
echo "Number of Deliverymen: $denum <br>";
echo "Number of Disabled users: $dunum";
echo "</h4>";
echo "<h3> Shop data </h3>";
echo "<h4>";
echo "Number of shops: $snum <br>";
echo "Amount of food in menu: $menum <br>";
echo "Amout of sold out food in menu: $sunum";
echo "</h4>";
echo "<h3> Food data </h3>";
echo "<h4>";
echo "Number of orders: $onum <br>";
echo "Number of pending orders: $ponum <br>";
echo "Number of uncooked orders: $pcnum <br>";
echo "Number of undelivered orders: $pdnum <br>";
echo "Number of unclaimed orders: $plnum <br>";
echo "Number of finished orders: $fnum";
echo "</h4>";
echo "<h3>Locker data</h3>";
echo "<h4>";
echo "Number of lockers: $tlnum <br>";
echo "Number of occupied lockers: $olnum";
echo "</h4>";
echo "<h3>System Data</h3>";
echo "<h4>";
echo "Tiferet Version: $version";
echo "</h4>"
?>
</body>

</html>