<!DOCTYPE html>

<?php
session_start();
include "../assets/vars.php";
if (empty($_SESSION['username'])) {
    header("Location: /home.php");
}
?>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/assets/navbar.css" type="text/css" />
    <link rel="stylesheet" href="/assets/delivery/finish.css">
</head>

<body>
    <stitle>tiferet</stitle>
    <stext>All done!</stext>

    <tyCtn>Thank you!</tyCtn>
    <img id='qrCode' src='/assets/like.gif'>
    <a href="/delivery.php">
        <button id='doneBtn'>Finish</button>
    </a>

</body>

</html>