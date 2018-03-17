<?php
/*
 * This is a countdown timer
 * End of Semester 5-19-18
 */

$secPerMin = 60;
$secPerHour = 60 * $secPerMin;
$secPerDay = 24 * $secPerHour;
$secPerYear = 365 * $secPerDay;

//current time
$now = time();

//Burning Man time
$burningMan = mktime(12,0,0,5,19,2018);

//Number of seconds between now and then
$seconds = $burningMan - $now;

$years = floor($seconds / $secPerYear);
$seconds = $seconds - ($years * $secPerYear);

$days = floor($seconds / $secPerDay);
$seconds = $seconds - ($days * $secPerDay);

$hours = floor($seconds / $secPerHour);
$seconds = $seconds - ($hours * $secPerHour);

$minutes = floor($seconds / $secPerMin);
$seconds = $seconds - ($minutes * $secPerMin);



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset ="utf=8">
    <title>Jeremy's Homepage</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css">
</head>
<body>
<header>
    <h1><?php include '../includes/header.php'?></h1>
</header>
<nav>
    <?php include '../includes/nav.php'?>
</nav>
<main>
    <h3>End Of Semester Countdown!</h3>
    <p>Days: <?=$days?> | Hours: <?=$hours?> | Minutes <?=$minutes?> | Seconds: <?= $seconds ?></p>
</main>
<footer><?php include '../includes/footer.php'?></footer>
</body>

</html>
