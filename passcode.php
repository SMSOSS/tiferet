<!DOCTYPE html>
<html>
<body>

<?php
$val = mt_rand(1000,9999);
echo "$val";
echo "<br>";
echo "<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$val&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />";

?>
</body>
</html>