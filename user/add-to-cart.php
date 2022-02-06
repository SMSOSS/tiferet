<!DOCTYPE html>

<head>
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("Location: /home.php");
    }
    include "../assets/vars.php";
    $order = $_GET['order'];
    $shop = $_GET['shop'];
    $lq = db_query("SELECT lockerid, location FROM lockerdata WHERE isoccupy=0 LIMIT 1");
    while ($row = $lq->fetch_assoc()) {
        $locker = $row['lockerid'];
        $location = $row['location'];
    }
    db_query("INSERT INTO food (locker, baseid, foodid, iscooked, isdeliver, istaken, foodname, password, location, shop) VALUES ($locker, $baseid, $foodid, 0, 0, 0, '$order', '$pass', '$location', '$shop')");
    db_query("UPDATE lockerdata SET isoccupy='1' WHERE lockerid='$locker'");
    echo "<script>location.replace('/user/confirm.php?baseid=$baseid');</script>";
    ?>
</body>

</html>