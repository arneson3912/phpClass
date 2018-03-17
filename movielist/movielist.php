<?php
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
    <h3>My Movie List</h3>
    <table border="1" width="80%">
        <tr>
            <th>Key</th>
            <th>Movie Title</th>
            <th>Rating</th>

        </tr>

    <?php
include '../includes/dbConn.php';

    $dsn = 'mysql:host=localhost;dbname=phpclass';
    $username = 'dbuser';
    $password = 'dbdev123';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

try {
    $db = new PDO($dsn, $username, $password, $options);
    $sql = $db->prepare("select * from movielist");
    $sql->execute();
    $row = $sql->fetch();

    while($row != null){
        echo "<tr>";
        echo "<td>" . $row["movieID"] . "</td>";
        echo "<td>" . $row["movieTitle"] . "</td>";
        echo "<td>" . $row["movieRating"] . "</td>";
        echo "</tr>";
        echo $row["movieRating"];
        $row = $sql->fetch();
    }



}catch (PDOException $e){
    $error = $e->getMessage();
    echo "Error: $error";
}


    ?>
    </table>
</main>
<footer><?php include '../includes/footer.php'?></footer>
</body>

</html>
