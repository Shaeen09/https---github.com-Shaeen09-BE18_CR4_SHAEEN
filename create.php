<?php
 require_once "db_connect.php";
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

    $sql = "INSERT INTO biglibrary (`$title`,`$image`, `$ISBNcode`, `$description`, `$type` ,`$Author_first_Name` ,`$Author_last_Name` ,`$Publisher_Name` ,`$Publisher_Address` ,`$Publish_date`) ";

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
        <input type="text" placeholder="Please enter the title" name="name"><br>
        <input type="text" placeholder="Please enter the image" name="image"><br>
        <input type="text" placeholder="Please enter the ISBNcode" name="number"><br>
        <input type="text" placeholder="Please enter the description" name="name"><br>
        <input type="text" placeholder="Please enter the type" name="name"><br>
        <input type="text" placeholder="Please enter the Author_first_Name" name="name"><br>
        <input type="text" placeholder="Please enter the Author_last_Name" name="name"><br>
        <input type="text" placeholder="Please enter the Publisher_Name" name="name"><br>
        <input type="text" placeholder="Please enter the Publisher_Address" name="name"><br>
        <input type="text" placeholder="Please enter the Publish_Date" name="date"><br>
        <input type="submit" name="submit" value="create entry">
        

    </form>
</body>
</html>