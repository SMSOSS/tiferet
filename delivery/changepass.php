<!DOCTYPE html>
<head>
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

hr.rounded {
  border-top: 4px solid #006666;
  border-radius: 5px;
}
</style>
</head>

<body>
<?php
session_start();
include("../vars.php");
if (!isset($_SESSION['loggedin'])) {
	header('Location: /delivery/login.php');
	exit;
}

$username = $_SESSION['username'];
?>
<h1>Change Password</h1>
<h3>
<?php
echo "Changing password for user $username";
echo '<form method=post>';
echo "Current Password: <br>";
echo '<input type="password" name="opass">';
echo "<br>";
echo "Enter new password: <br>";
echo '<input type="password" name="pass">';
echo "<br>";
echo "Enter new password again: <br>";
echo '<input type="password" name="pass2">';
echo "<br> <br>";
echo '<input type="submit" value="Change password" name="change">';
echo '</form>';

if (isset($_POST['change'])){
        if(!empty($_POST['pass']) && !empty($_POST['pass2']) && !empty($_POST['opass'])){
                $opass = $_POST['opass'];
                $query = db_query("SELECT username, password FROM userdata WHERE username='$username' AND password='$opass'");
                $qcount = db_num_rows($query);
                if ($qcount == 1){
                        $pass = $_POST['pass'];
                        $pass2 = $_POST['pass2'];
                        if ($pass === $pass2) {
                                db_query("UPDATE userdata SET password='$pass' WHERE username='$username'");
                                echo "Your password has been changed.";
                        } else {
                                echo "New passwords doesn't match!";
                        }
                } else {
                        echo "Wrong current password.";
                }
        } else {
                echo "Please fill in all fields.";
        }
}
?>
</h3>
</body>

<footer>
        <hr class="rounded">
        <h3>
        <?php
        echo "<form method='post'>";
        echo '<input type="submit" value="Back Home" name="backhome">';
        echo " ";
        echo '<input type="submit" value="Log Out" name="logout">';
        echo '</form>';
        if (isset($_POST['backhome'])){
                header('Location: /delivery.php');
        }
        if (isset($_POST['logout'])) {
                header('Location: /delivery/login.php');
        }
        ?>
        </h3>
</footer>
</html>