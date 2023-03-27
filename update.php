<?php
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


    $sql = "UPDATE `biglibrary` SET `Title`='$title',`image`='$image',`ISBNcode`='$ISBNcode',`Description`='$description',`Type`='$type',`Author_first_Name`='$Author_first_Name',`Author_last_Name`='$Author_last_Name',`Publisher_Name`='$Publisher_Name',`Publisher_Address`='$Publisher_Address',`Publish_Date`='$Publish_date' WHERE id = $id";

    if(mysqli_query($connect, $sql)){
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
    <title>Document</title>
</head>
<body>
<fieldset>
           <legend class='h1'>Update Item</legend>
    <form method="POST" enctype="multipart/form-data">
    <table class='table'>
        <tr>
            <th>Title</th>
        <td>
            <input type="text" placeholder="Please enter the title" name="title"  alt="<?= $row["title"]?>"></td>
        <th>Image</th>
        <td><input type="text" placeholder="Please enter the image" name="image" alt="<?= $row["image"]?>"></td>
        <th>ISBNcode</th>
        <td><input type="text" placeholder="Please enter the ISBNcode" name="number" alt="<?= $row["number"]?>"></td>
        </tr>
        <tr>
            <th>Description</th>
        <td><input type="text" placeholder="Please enter the description" name="description" alt="<?= $row["description"]?>"></td>
        <th>Type</th>
        <td><input type="text" placeholder="Please enter the type" name="type" alt="<?= $row["type"]?>"></td>
        </tr>
        <tr>
            <th>Author_first_Name</th>
        <td><input type="text" placeholder="Please enter the Author_first_Name" name="fname" alt="<?= $row["fname"]?>"></td>
        <th>Author_last_Name</th>
        <td><input type="text" placeholder="Please enter the Author_last_Name" name="lname" alt="<?= $row["lname"]?>"></td>
        </tr>
        <tr>
            <th>Publisher_Name</th>
        <td><input type="text" placeholder="Please enter the Publisher_Name" name="pname" alt="<?= $row["pname"]?>"></td>
        <th>Publisher_Address</th>
        <td><input type="text" placeholder="Please enter the Publisher_Address" name="padd" alt="<?= $row["padd"]?>"></td>
        <th>Publish_Date</th>
        <td><input type="text" placeholder="Please enter the Publish_Date" name="date" alt="<?= $row["date"]?>"></td>
        </tr>
        <tr>
        <input type="submit" name="submit" value="edit entry">
        </tr>
    </table>
    </form>
</fieldset>
</body>
</html>