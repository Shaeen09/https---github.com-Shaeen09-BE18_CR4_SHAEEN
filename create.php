<?php
 require_once "db_connect.php";
    if(isset($_POST["submit"])){
   

    $title =$_POST["title"];
    $image =$_POST["image"];
    $ISBNcode =$_POST["number"];
    $description =$_POST["text"];
    $type =$_POST["type"];
    $Author_first_Name =$_POST["fname"];
    $Author_last_Name =$_POST["lname"];
    $Publisher_Name =$_POST["pname"];
    $Publisher_Address =$_POST["padd"];
    $Publish_date =$_POST["date"];

    $sql = "INSERT INTO `biglibrary`( `Title`, `image`, `ISBNcode`, `Description`, `Type`, `Author_first_Name`, `Author_last_Name`, `Publisher_Name`, `Publisher_Address`, `Publish_Date`) VALUES ('$title',' $image',' $ISBNcode','$description','$type','$Author_first_Name','$Author_last_Name',' $Publisher_Name','$Publisher_Address','$Publish_date ') ";

    if(mysqli_query($connect, $sql)){
        header("Location:index.php");

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
        <input type="text" placeholder="Please enter the title" name="title"><br>
        <input type="text" placeholder="Please enter the image" name="image"><br>
        <input type="text" placeholder="Please enter the ISBNcode" name="number"><br>
        <input type="text" placeholder="Please enter the description" name="text"><br>
        <input type="text" placeholder="Please enter the type" name="type"><br>
        <input type="text" placeholder="Please enter the Author_first_Name" name="fname"><br>
        <input type="text" placeholder="Please enter the Author_last_Name" name="lname"><br>
        <input type="text" placeholder="Please enter the Publisher_Name" name="pname"><br>
        <input type="text" placeholder="Please enter the Publisher_Address" name="padd"><br>
        <input type="text" placeholder="Please enter the Publish_Date" name="date"><br>
        <input type="submit" name="submit" value="create entry">
        

    </form>
</body>
</html>