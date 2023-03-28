<?php
include('header.php'); 
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
    <tr>
      <?= $layout; ?>
    </tr>
  </tbody>
        </table> 

   <? include('footer.php'); ?> 