<html>
<body>

<?php
/* var start */
$locker = $_GET["food"] / 1014 / $_GET["base"] / 29;

if ($locker > 10){
        /* locker will be invalid as we are currently max 10 */
        echo "Invalid Food ID detected <br>";
} else {
        echo "Valid Food ID detected and food is stored in locker $locker";
}

?>

</body>
</html>