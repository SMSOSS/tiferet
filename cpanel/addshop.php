<!DOCTYPE html>

<head>
    <title>Add new restaurant</title>
</head>

<body>
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
            db_query("INSERT INTO `menu`(`name`, `passcode`, `location`) VALUES ('$shop','$location','$passcode');");
            echo "Added restaurant $shop with password $passcode";
        } else {
            echo "Fields are not being filled? Check your input and try again.";
        }
    }
    ?>
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
