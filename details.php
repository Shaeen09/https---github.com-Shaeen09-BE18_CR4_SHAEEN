<?php

require_once "db_connect.php";

$id = $_GET["id"];

$sql = "SELECT * FROM biglibrary WHERE id = $id";

$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <p><?= $row["Title"] ?></p>
    <p><img src="<?= $row["image"] ?>" width="400"></p>
    <p><?= $row["ISBNcode"] ?></p>
    <p><?= $row["Description"] ?></p>
    <p><?= $row["Type"] ?></p>
    <p><?= $row["Author_first_Name"] ?></p>
    <p><?= $row["Author_last_Name"] ?></p>
    <p><?= $row["Publisher_Name"] ?></p>
    <p><?= $row["Publisher_Address"] ?></p>
    <p><?= $row["Publish_Date"] ?></p>
    
    <a href="index.php">Back to Home page</a>
    </div>
   
</body>
</html>
