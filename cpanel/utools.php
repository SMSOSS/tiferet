<!DOCTYPE html>
<html>

<head>
<title>Admin Toolbox</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<style>

@font-face { font-family: HarmonyBold; src: url('/fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('/fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('/fonts/light.ttf'); } 
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

p {
        text-align: center;
        font-family: HarmonyLight
}

input[type=submit] {
    padding:5px 15px; 
    background:#DBF9FC; 
    border:1px solid black;
    cursor:pointer;
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
  <a href="/cpanel/cpanel.php">Home</a>
  <a class="active" href="/cpanel/toolbox.php">Toolbox</a>
  <a href="/cpanel/login.php">Log Out</a>
</div>
</h2>

<h2>Food details</h2>
<?php
include("../vars.php");

function promoteUser($user, $level) {
        db_query("UPDATE userdata SET isdelivery='$level' WHERE username='$user'");
}

$query = db_query("SELECT * FROM userdata");
$qcount = db_num_rows($query);
if ($qcount > 0) {
        $base = 0;
         while($row = $query->fetch_assoc()) {
                $username = $row['username'];
                $isdelivery = $row['isdelivery'];
                $email = $row['email'];
                $dstat = $row['isdisabled'];
                echo "<h3>User: $username</h3>";
                echo "<p>Email: $email</p>";
                if ($isdelivery == 1){
                        echo "<p>Rank: Deliveryman</p>";
                } else if ($isdelivery == 2) {
                        echo "<p>Rank: Admin</p>";
                } else {
                        echo "<p>Rank: User</p>";
                }
                if ($dstat == 0){
                        echo "<p>Status: Enabled</p>";
                } else {
                        echo "<p>Status: Disabled</p>";
                }
                echo "<form method='post'>";
                echo "<input type='hidden' name='username' value='" . $row['username'] . "'>";
                echo "<input type='hidden' name='rank' value='" . $row['isdelivery'] . "'>";
                $dem = "<input type='submit' value='Demote User' name='demote'>"; // feature downgrade user rank
                $pro = "<input type='submit' value='Promote User' name='promote'>"; // feature upgrade user rank
                $disable = "<input type='submit' value='Disable User' name='disable'>"; // feature disable user
                $enable = "<input type='submit' value='Enable User' name='enable'>"; // feature disable user
                echo "<h3>";
                echo "</form>";
                echo "$dem $pro <br>";
                echo "$disable $enable<br>";
                echo "</h3>";
                
        }

}
?>
<h3>
<?php

if (isset($_POST['demote'])) {
        $username = $_POST['username'];
        $rank = $_POST['rank'];
        if ($rank > 0){
                $newrank = $rank - 1;
        } else {
                $newrank = $rank;
        }
        db_query("UPDATE userdata SET isdelivery='$newrank' WHERE username='$username'");
        echo "operation successful";
        header('Location: /cpanel/utools.php');

}
if (isset($_POST['promote'])) {
        $username = $_POST['username'];
        $rank = $_POST['rank'];
        if ($rank < 2){
                $newrank = $rank + 1;
        } else {
                $newrank = $rank;
        }
        db_query("UPDATE userdata SET isdelivery='$newrank' WHERE username='$username'");
        echo "operation successful";
        header('Location: /cpanel/utools.php');

}
if (isset($_POST['disable'])){
        $username = $_POST['username'];
        db_query("UPDATE userdata SET isdisabled=1 WHERE username='$username'");
        echo "operation successful";
        header('Location: /cpanel/utools.php');
}
if (isset($_POST['enable'])){
        $username = $_POST['username'];
        db_query("UPDATE userdata SET isdisabled=0 WHERE username='$username'");
        echo "operation successful";
        header('Location: /cpanel/utools.php');
}
?>
</h3>
</body>
<footer>
<h3>
<?php
echo "<br>";
echo '<form method="post">';
echo '<input type="submit" value="Back" name="back">';
echo "</form>";
if (isset($_POST["back"])){
        header('Location: /cpanel/toolbox.php');
}
?>
</h3>
</footer>
</html>