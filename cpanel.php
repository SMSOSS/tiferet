<!DOCTYPE html>

<head>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /cpanel/login.php');
        exit;
    } else {
        header('Location: /cpanel/cpanel.php');
    }
    ?>
</body>

</html>