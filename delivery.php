<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<style>

@font-face { font-family: HarmonyBold; src: url('fonts/bold.ttf'); } 
@font-face { font-family: HarmonyReg; src: url('fonts/regular.ttf'); } 
@font-face { font-family: HarmonyLight; src: url('fonts/light.ttf'); } 
h1 {
        text-align: center;
        font-family: HarmonyBold
}

h3 {
        text-align: center;
        font-family: HarmonyLight
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

</style>

<meta http-equiv="refresh" content="10">

</head>

<body>

<title>Deliver Panel</title>
<h1>Deliver Panel</h1>

<?php
/* include global vars */
include("db.php");

/* start db. nothing goes before this line */
db_open();

/* FS: isset check */


/* variable start */
$pending = db_query("SELECT foodname, baseid, locker, password FROM food WHERE iscooked='1' AND isdeliver='0';");
$pcount = db_num_rows($pending);

?>

<h3>
<?php
/* test */
if ($pcount > 0) {
        $base = 0;
        while($row = $pending->fetch_assoc()) {
                $food = 0;
                $locker = 0;
                $pass = 0;
                $locker = $row['locker'];
                $food = $row['foodname'];
                $pass = $row['password'];
                $rpass = $pass+10000;
                echo "$food that goes to $locker";
                echo "<form method='post'>";
                echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                $temp = "<input type='submit' value='Take Job' name='mdone'>";
                echo $temp;
                echo "</form>";
                
        }

}  else {
        echo "no pending orders. yay";
}

if (isset($_POST["baseid"])) {
        $base = $_POST["baseid"];
        $pending = db_query("SELECT foodname, baseid, locker, password FROM food WHERE baseid='$base';");
        db_query("UPDATE food SET isdeliver=2 WHERE baseid=$base");
        echo "<script>location.replace('/delivery/cfmd.php?baseid=$base');</script>";
        if ($pcount > 0) {
                $base = 0;
                while($row = $pending->fetch_assoc()) {
                        $food = 0;
                        $locker = 0;
                        $pass = 0;
                        $locker = $row['locker'];
                        $food = $row['foodname'];
                        $pass = $row['password'];
                }
        }
}
?>
</h3>

</body>
</html>