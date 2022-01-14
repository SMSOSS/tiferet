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

body {
background-color: #DBF9FC;
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

button {
    padding:5px 15px; 
    background:#DBF9FC; 
    border:1px solid black;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
    font-family: HarmonyBold;
    font-size: 15px;
}

</style>

</head>
<body>
<title>food is order complet</title>
<h1>Confirm page</h1>

<h3>
<?php
/* import start */
include("vars.php");

/* db init */
db_open();

/* variable start */
$timestamp = $_GET["baseid"];
$cook = db_query("SELECT iscooked, isdeliver, istaken, password, location FROM food WHERE baseid='$timestamp';");
$prows = db_num_rows($cook);
$food = $_GET["food"];

if ($prows > 0) {
        while($row = $cook->fetch_assoc()) {
                $iscook = $row['iscooked'];
                $isdeliver = $row['isdeliver'];
                $password = $row['password'];
		$istaken = $row['istaken'];
                $location = $row['location'];
        }
}

if ($iscook == 0) {
        echo "Your $food is being prepared. <br> Please be patient.";
        echo "<meta http-equiv='refresh' content='10'>";
} elseif ($istaken == 1) {
	echo "Please enjoy your meal";
} elseif ($isdeliver == 1) {
        echo "Your $food is ready. <br>";
        echo "<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$password&choe=UTF-8%22%20title=%22your%20order%20is%20ready%22' />";
        echo "<br>";
        echo "<a href='http://maps.google.com?q=$location'>";
        ?>
        <input type="submit" value="Show location on Google Map" />
        </a>
        <script>
                var notification = new Notification("Your food is ready!");
        </script>
<?php
} elseif ($isdeliver == 0) {
        echo "Your $food is being delivered. <br> Please be patient.";
        echo "<meta http-equiv='refresh' content='10'>";
}

// echo "$fook";
echo "<br> <br>";
?>
<button onclick="notifyMe()">Notify me!</button>

</h3>

<script>
function notifyMe() {
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  else if (Notification.permission === "granted") {
        // previously granted. great
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      if (permission === "granted") {
        // you're finally accepting, wow
      }
    });
  }
}
</script>

</body>
</html>
