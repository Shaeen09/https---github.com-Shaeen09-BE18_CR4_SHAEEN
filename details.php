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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="card" style="width: 18rem;">
  <img src="<?= $row["image"] ?>" class="card-img-top" width="300" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $row["Title"] ?></h5>
    <p class="card-text"><?= $row["Description"] ?></p>
    <p><?= $row["Type"] ?></p>
    <p><?= $row["Author_first_Name"] ?> <?= $row["Author_last_Name"] ?></p>
    
    <p><?= $row["Publisher_Name"] ?></p>
    <p><?= $row["Publisher_Address"] ?></p>
    <p><?= $row["Publish_Date"] ?></p> 
    <a href="index.php" class="btn btn-primary">Home</a>
    <a href="update.php"><button type="button" class="btn btn-warning btn-sm">Update Page</button></a>

  </div>
</div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
