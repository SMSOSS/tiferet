<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="/assets/navbar.css" type="text/css" />
</head>

<?php
include "assets/vars.php";
session_start();
db_open;

if (isset($_SESSION['loggedin'])) {
    echo "<script>location.replace('/home.php');</script>";
}
?>

<body>
    <header>
        <stitle>tiferet</stitle>
        <logtext>Log in</logtext>
    </header>
    <section>
        <article>
            <form method="post">
                <utext>Username</utext>
                <input type="text" name="username"><br>
                <ptext>Password</ptext>
                <input type="password" name="password"><br>
                <input type="register" value="Register" name="register">
                <input type="submit" value="Login" name="login">
            </form>
        </article>
    </section>
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = db_query("SELECT username, password, isdisabled FROM userdata WHERE password='$password' AND username='$username' AND isdisabled=0");
        $qcount = db_num_rows($query);
        if ($qcount > 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: /home.php');
            exit;
        } else {
            echo "<errMsg>Wrong username / password.</errmsg>";
        }
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