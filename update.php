<?php
include('header.php');
require_once "db_connect.php";

$id = $_GET["id"];

$sql = "SELECT * FROM biglibrary WHERE id = $id";
$result = mysqli_query($connect,$sql);
$row =mysqli_fetch_assoc($result);

if(isset($_POST["submit"])){
   
    $title =$_POST["title"];
    $image =$_POST["image"];
    $ISBNcode =$_POST["number"];
    $description =$_POST["description"];
    $type =$_POST["type"];
    $Author_first_Name =$_POST["fname"];
    $Author_last_Name =$_POST["lname"];
    $Publisher_Name =$_POST["pname"];
    $Publisher_Address =$_POST["padd"];
    $Publish_date =$_POST["date"];


    $sqlUpdate = "UPDATE `biglibrary` SET `Title`='$title',`image`='$image',`ISBNcode`='$ISBNcode',`Description`='$description',`Type`='$type',`Author_first_Name`='$Author_first_Name',`Author_last_Name`='$Author_last_Name',`Publisher_Name`='$Publisher_Name',`Publisher_Address`='$Publisher_Address',`Publish_Date`='$Publish_date' WHERE id = $id";

    if(mysqli_query($connect, $sqlUpdate)){
        header("Location: index.php");
    }

}

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
<fieldset>
           <legend class='h1'>Update Item</legend>
    <form method="POST"  enctype="multipart/form-data">
    <table class='table'>
        <tr>
            <th>Title</th>
        <td>
            <input type="text" placeholder="Please enter the title"  name="title" value="<?= $row["Title"]?>"></td>
        <th>Image</th>
        <td><input type="text" placeholder="Please enter the image"  name="image" value="<?= $row["image"]?>"></td>
        <th>ISBNcode</th>
        <td><input type="text" placeholder="Please enter the ISBNcode"  name="number" value="<?= $row["ISBNcode"]?>" ></td>
        </tr>
        <tr>
            <th>Description</th>
        <td><input type="text" placeholder="Please enter the description"  name="description" value="<?= $row["Description"]?>" ></td>
        <th>Type</th>
        <td><input type="text" placeholder="Please enter the type"  name="type" value="<?= $row["Type"]?>"></td>
        </tr>
        <tr>
            <th>Author_first_Name</th>
        <td><input type="text" placeholder="Please enter the Author_first_Name"  name="fname" value="<?= $row["Author_first_Name"]?>"></td>
        <th>Author_last_Name</th>
        <td><input type="text" placeholder="Please enter the Author_last_Name"  name="lname" value="<?= $row["Author_last_Name"]?>"></td>
        </tr>
        <tr>
            <th>Publisher_Name</th>
        <td><input type="text" placeholder="Please enter the Publisher_Name"  name="pname" value="<?= $row["Publisher_Name"]?>"></td>
        <th>Publisher_Address</th>
        <td><input type="text" placeholder="Please enter the Publisher_Address"  name="padd" value="<?= $row["Publisher_Address"]?>" ></td>
        <th>Publish_Date</th>
        <td><input type="text" placeholder="Please enter the Publish_Date"  name="date" value="<?= $row["Publish_Date"]?>"></td>
        </tr>
        <tr>
        <td><a href="index.php"><button class="btn btn-warning btn-sm" type="button">Home</button></a></td>
        <input type="submit" name="submit" value="edit entry">
        </tr>
    </table>
    </form>
</fieldset>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
<? include('footer.php'); ?> 
