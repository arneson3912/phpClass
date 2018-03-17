<?php

//Possible dice sides
$side = array();
$side[0]="1";
$side[1]="2";
$side[2]="3";
$side[3]="4";
$side[4]="5";
$side[5]="6";

/*variables for different dice rolls*/
$pRoll1 = mt_rand(0,5);
$pRoll2 = mt_rand(0,5);
$cRoll1 = mt_rand(0,5);
$cRoll2 = mt_rand(0,5);
$cRoll3 = mt_rand(0,5);
$result;

/*calculate dice roll*/
$pScore = $side{$pRoll1} + $side{$pRoll2};
$cScore = $side{$cRoll1} + $side{$cRoll2} + $side{$cRoll3};

/*assign image to side of dice*/
$dice1 = '<img src="/images/dice_1.png" alt="Dice side one">';
$dice2 = '<img src="/images/dice_2.png" alt="Dice side two">';
$dice3 = '<img src="/images/dice_3.png" alt="Dice side three">';
$dice4 = '<img src="/images/dice_4.png" alt="Dice side four" >';
$dice5 = '<img src="/images/dice_5.png" alt="Dice side five" >';
$dice6 = '<img src="/images/dice_6.png" alt="Dice side six">';
/*image variable*/
$img;
$img1;
$img2;
$img3;
$img4;


/*Determine who won*/
if($pScore > $cScore)
{
    $result = "You Win";
}
else {$result = "You Lose";}

/**assign image to dice roll one**/
if($pRoll1 == "0"){
    $img = $dice1;
}
else if($pRoll1 =="1"){
    $img = $dice2;
}
else if($pRoll1 == "2"){
    $img = $dice3;
}
else if($pRoll1 == "3"){
    $img = $dice4;
}
else if($pRoll1 == "4"){
    $img = $dice5;
}
else if($pRoll1 == "5"){
    $img = $dice6;
}
/*assign image to dice roll 2*/
if($pRoll2 == "0"){
    $img1 = $dice1;
}
else if($pRoll2 =="1"){
    $img1 = $dice2;
}
else if($pRoll2 == "2"){
    $img1 = $dice3;
}
else if($pRoll2 == "3"){
    $img1 = $dice4;
}
else if($pRoll2 == "4"){
    $img1 = $dice5;
}
else if($pRoll2 == "5"){
    $img1 = $dice6;
}
/*assign image to computer roll one*/
if($cRoll1 == "0"){
    $img2 = $dice1;
}
else if($cRoll1 =="1"){
    $img2 = $dice2;
}
else if($cRoll1 == "2"){
    $img2 = $dice3;
}
else if($cRoll1 == "3"){
    $img2 = $dice4;
}
else if($cRoll1 == "4"){
    $img2 = $dice5;
}
else if($cRoll1 == "5"){
    $img2 = $dice6;
}
/*assign image to computer roll two*/
if($cRoll2 == "0"){
    $img3 = $dice1;
}
else if($cRoll2 =="1"){
    $img3 = $dice2;
}
else if($cRoll2 == "2"){
    $img3 = $dice3;
}
else if($cRoll2 == "3"){
    $img3 = $dice4;
}
else if($cRoll2 == "4"){
    $img3 = $dice5;
}
else if($cRoll2 == "5"){
    $img3 = $dice6;
}
/*assign image to computer roll three*/
if($cRoll3 == "0"){
    $img4 = $dice1;
}
else if($cRoll3 =="1"){
    $img4 = $dice2;
}
else if($cRoll3 == "2"){
    $img4 = $dice3;
}
else if($cRoll3 == "3"){
    $img4 = $dice4;
}
else if($cRoll3 == "4"){
    $img4 = $dice5;
}
else if($cRoll3 == "5"){
    $img4 = $dice6;
}
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
<h2>Your score: <?= $side{$pRoll1}. " + " . $side{$pRoll2}. " = " .$pScore?></h2>

    <p>
        <?= $img, $img1?>
    </p>
    <h2>Computers score: <?= $side{$cRoll1}. " + " .$side{$cRoll2}. " + " .$side{$cRoll3}. " = " .$cScore  ?></h2>
    <p>
        <?= $img2, $img3, $img4 ?>
    </p>
    <h1>Result: <?= $result ?></h1>
</main>
<footer><?php include '../includes/footer.php'?></footer>
</body>

</html>