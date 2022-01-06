<!DOCTYPE html>
<html>

<head>
<title>Kitchen system</title>
<meta http-equiv="refresh" content="10">

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
        font-family: HarmonyReg
}

a {
        text-align: center;
        font-family: HarmonyReg
}

input[type=submit] {
    padding:4px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

</style>

</head>
<body>

<h1>Kitchen System </h1>

<h3>
<?php

/* start import */
include("db.php");
db_open();

if (isset($_POST["baseid"])) {
        $base = $_POST["baseid"];
        db_query("UPDATE food SET iscooked=1 WHERE baseid=$base");
}

/* start function and variable */
$count = db_query("SELECT COUNT(baseid) as total FROM food WHERE NOT iscooked='1';");
$pending = db_query("SELECT foodname, baseid FROM food WHERE NOT iscooked='1';");
$prows = db_num_rows($pending);

$countr=db_fetch_array($count);
$rcount=$countr['total'];

if ($rcount == 0){
        echo "No pending orders. Hooray!";
} else {
        echo "There are $rcount pending orders. <br> <br>";
        echo "They are: <br> <br>";
        if ($prows > 0) {
                $base = 0;
                while($row = $pending->fetch_assoc()) {
                        echo $row['foodname'];
                        echo "  ";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='baseid' value='" . $row['baseid'] . "'>";
                        $temp = "<input type='submit' value='Mark done' name='mdone'>";
                        echo $temp;
                        echo "</form>";
                        echo "<br>";
                }
        }
        echo "<br>";

}
?>

</h3>
</body>
</html>