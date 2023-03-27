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
<fieldset>
           <legend class='h1'>Add Item</legend>
    <form method="POST" enctype="multipart/form-data">
    <table class='table'>
        <tr>
        <th>Title</th>
        <td><input type="text" placeholder="Please enter the title" name="title"></td>
        <th>Image</th>
        <td><input type="text" placeholder="Please enter the image" name="image"></td>
        <th>ISBNcode</th>
        <td><input type="text" placeholder="Please enter the ISBNcode" name="number"></td>
        </tr>

        <tr>
            <th>Description</th>
        <td><input type="text" placeholder="Please enter the description" name="description"></td>
        <th>Type</th>
        <td><input type="text" placeholder="Please enter the type" name="type"></td>
        </tr>
        <tr>
            <th>Author First Name</th>
        <td><input type="text" placeholder="Please enter the Author_first_Name" name="fname"></td>
        <th>Author Last Name</th>
        <td><input type="text" placeholder="Please enter the Author_last_Name" name="lname"></td>
        </tr>
        <tr>
            <th>Publisher Name</th>
        <td><input type="text" placeholder="Please enter the Publisher_Name" name="pname"></td>
        <th>Publisher Address</th>
       <td> <input type="text" placeholder="Please enter the Publisher_Address" name="padd"></td>
       <th>Publish_Date</th>
        <td><input type="text" placeholder="Please enter the Publish_Date" name="date"></td>
        </tr>
        <tr>
        <td><button class="btn btn-success btn-sm" type="submit">Insert Item</button></td>
        <td><a href="index.php"><button class="btn btn-warning btn-sm" type="button">Home</button></a></td>
        <!-- <input type="submit" name="submit" value="create entry"> -->
        </tr>
    </table>
    </form>
</fieldset>
</body>
</html>