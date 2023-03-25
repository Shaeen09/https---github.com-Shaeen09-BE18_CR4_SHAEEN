<?php
require_once "db_connect.php";

$id = $_GET["id"];

$sql = "SELECT * FROM biglibrary WHERE id = $id";
$result = mysqli_query($connect,$sql);
$row =mysqli_fetch_assoc($result);

if(isset($_POST["submit"])){
   
    $title =$_POST["name"];
    $image =$_POST["image"];
    $ISBNcode =$_POST["number"];
    $description =$_POST["name"];
    $type =$_POST["name"];
    $Author_first_Name =$_POST["name"];
    $Author_last_Name =$_POST["name"];
    $Publisher_Name =$_POST["name"];
    $Publisher_Address =$_POST["name"];
    $Publish_date =$_POST["date"];

    $sql2 = "UPDATE `biglibrary` SET `Title`='$title',`image`='$image',`ISBNcode`='$ISBNcode',`Description`='$description',`Type`='$type',`Author_first_Name`='$Author_first_Name',`Author_last_Name`='$Author_last_Name',`Publisher_Name`='$Publisher_Name',`Publisher_Address`='$Publisher_Address',`Publish_Date`='$Publish_date' WHERE id = $id ";

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
    <form method="POST">
        <input type="text" placeholder="Please enter the title" name="name"  value="<?= $row["title"] ?>" ><br>
        <input type="text" placeholder="Please enter the image" name="image" value="<?= $row["image"] ?>" >
        <input type="text" placeholder="Please enter the ISBNcode" name="number" value="<?= $row["number"] ?>">
        <input type="text" placeholder="Please enter the description" name="name" value="<?= $row["name"] ?>">
        <input type="text" placeholder="Please enter the type" name="name" value="<?= $row["name"] ?>">
        <input type="text" placeholder="Please enter the Author_first_Name" name="name" value="<?= $row["name"] ?>">
        <input type="text" placeholder="Please enter the Author_last_Name" name="name" value="<?= $row["name"] ?>">
        <input type="text" placeholder="Please enter the Publisher_Name" name="name" value="<?= $row["name"] ?>">
        <input type="text" placeholder="Please enter the Publisher_Address" name="name" value="<?= $row["name"] ?>">
        <input type="text" placeholder="Please enter the Publish_Date" name="date" value="<?= $row["date"] ?>">
        <input type="submit" name="submit" value="edit entry">
        

    </form>
</body>
</html>