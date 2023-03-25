<?php
require_once "db_connect.php";

$sql = "SELECT * FROM biglibrary";

$result = mysqli_query($connect,$sql);

$layout = "";

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        $layout .= "
       
        <tr>
        <td> {$row["Title"]}</td>
        <td><img src ='{$row["image"]}' width ='100'></td>      
        <td> {$row["Author_first_Name"]}  {$row["Author_last_Name"]}</td>
        
        <td><a href='delete.php?id={$row["id"]}'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
        <td><a href='details.php?id={$row["id"]}'><button class='btn btn-warning btn-sm' type='button'>Details</button></a></td>
        <td><a href='update.php?id={$row["id"]}'><button class='btn btn-success btn-sm' type='button'>Update</button></a></td>
        </tr>
        
        ";
    }
}else {
    $layout = "No result";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
<h2 id="main_heading">WELCOME to Biglibrary</h2>
    <div class ="container my-5 p-4">
        
<h3>List of Collection</h3>
<a href="create.php"><button type="button" class="btn btn-primary">Create Entry</button></a> 
        <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Author</th>
      <th></th>
      <th></th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
    <tr><?= $layout; ?>
    </tr>
  </tbody>
        </table> 

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>