<?php
require_once "db_connect.php";

$sql = "SELECT * FROM biglibrary";

$result = mysqli_query($connect,$sql);

$layout = "";

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        $layout .= "
       
        <table>
        <thead>
        <tr>
        <td> {$row["id"]}</td>
        <td> {$row["Title"]}</td>
        <td><img src ='{$row["image"]}' width ='100'></td>
        <td> {$row["ISBNcode"]}</td>
        <td> {$row["Description"]}</td>
        <td> {$row["Author_first_Name"]}</td>
        <td> {$row["Author_last_Name"]}</td>
        <td> {$row["Publisher_Name"]}</td>
        <td> {$row["Publisher_Address"]}</td>
        <td> {$row["Publish_Date"]}</td>
        <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
        </tr>
        </thead>
        <hr>
        </table>
        
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
    <div class ="container my-5">
        
<h3>List of Collection</h3>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">ISBNcode</th>
      <th scope="col">Description</th>
      <th scope="col">Type</th>
      <th scope="col">Author_first_Name</th>
      <th scope="col">Author_last_Name</th>
      <th scope="col">Publisher_Name</th>
      <th scope="col">Publisher_Address</th>
      <th scope="col">Publish_Date</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>
  </thead>
  <tbody>
  <a href="create.php"><button type="button" class="btn btn-primary">Create Entry</button></a> <br>
  <?= $layout; ?>
  
  <!-- <tr>
      <th scope="col">2</th>
      <th scope="col">Listen to Your Heart:The London Adventure</th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/51akx6glTBL.jpg" alt="100" width="100"></th>
      <th scope="col">234567890</th>
      <th scope="col">Shortly before his eighteenth birthday, Ruskin embarks on a literary journey and reaches England after charting unknown waters. </th>
      <th scope="col">Book</th>
      <th scope="col">Ruskin</th>
      <th scope="col">Bond</th>
      <th scope="col">Penguin</th>
      <th scope="col">London</th>
      <th scope="col">19 May 2022</th>
      <td><a href='delete.php?id={$row["id"]}'><button type="button" class="btn btn-danger">Delete</button></a></td>
        <td><a href='details.php?id={$row["id"]}'><button type="button" class="btn btn-info">Details</button></a></td>
        <td><a href='update.php?id={$row["id"]}'><button type="button" class="btn btn-success">Update</button></a></td>
    </tr>

    <tr>
      <th scope="col">3</th>
      <th scope="col">Business of Sports:The winning Formula for success</th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/51GeKhJA48L._SX322_BO1,204,203,200_.jpg" alt="100" width="100"></th>
      <th scope="col">34567890</th>
      <th scope="col">The business of sports is booming! With the advent of professional sports leagues like the IPL (Indian Premier League), ISL (Indian Super League), PVL (Pro Volleyball League)...</th>
      <th scope="col">Book</th>
      <th scope="col">Vinit</th>
      <th scope="col">Karnik</th>
      <th scope="col">Popular Prakashan Pv</th>
      <th scope="col">New Delhi</th>
      <th scope="col">1 January 2022</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">4</th>
      <th scope="col">A Place Called Home</th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/51ohdBVYMoL._SY264_BO1,204,203,200_QL40_FMwebp_.jpg" width="100"></th>
      <th scope="col">4567890</th>
      <th scope="col">In the windowless, cramped servant's room at Mrs Shetty's luxurious house, where her mother is a maid, Alka dreams of an escape. When Mrs Shetty decides to send her to the same school as her daughter, she works hard, moulding herself into a new avatar.</th>
      <th scope="col">Book</th>
      <th scope="col">Preeti</th>
      <th scope="col">Shenoy</th>
      <th scope="col">HarperCollins India</th>
      <th scope="col">Mumbai</th>
      <th scope="col">27 June 2022</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">5</th>
      <th scope="col">The Struggle for Police Reforms in India</th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/41iabzmJMhL._SY264_BO1,204,203,200_QL40_FMwebp_.jpg" alt="" width="100"></th>
      <th scope="col">5678901</th>
      <th scope="col">Police should be people-friendly and it should inspire confidence among all sections of people as the protector of their lives, property and honour. </th>
      <th scope="col">Book</th>
      <th scope="col">Prakash</th>
      <th scope="col">Singh</th>
      <th scope="col">Rupa Publications In</th>
      <th scope="col">New Delhi</th>
      <th scope="col">5 May 2022</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">6</th>
      <th scope="col">The Seeker's Guide to Harry Potter - Audible Audio Edition - of the DVD by Reality Films </th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/51cuYMjKu1L.jpg" alt="" width="100"></th>
      <th scope="col">3456721</th>
      <th scope="col">The Seeker's Guide to Harry Potter takes you on a journey and exploration into the underlying themes of J. K. Rowlings fantastically successful Harry Potter series. </th>
      <th scope="col">DVD</th>
      <th scope="col">Dr Geo Athena</th>
      <th scope="col">Author_last_Name</th>
      <th scope="col">Trevarthen</th>
      <th scope="col">New York</th>
      <th scope="col">12 November 2010</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">7</th>
      <th scope="col">Barbie Magical Moments Storybook and DVD (Readers Book & Dvd) </th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/51WX89MRQQL._SX415_BO1,204,203,200_.jpg" alt="" width="100"></th>
      <th scope="col">1256789</th>
      <th scope="col">Retells the stories of four of Barbie's movies, in which she dances, copes with an evil plot, changes places with her double, and tries to save her forest home.</th>
      <th scope="col">DVD</th>
      <th scope="col">Jill</th>
      <th scope="col">Goldowsky</th>
      <th scope="col">Reader's Digest</th>
      <th scope="col">New York</th>
      <th scope="col">24 July 2007</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">8</th>
      <th scope="col">Full stack developer guide</th>
      <th scope="col"><img src="https://m.media-amazon.com/images/I/412seVj3DWL.jpg" alt=""></th>
      <th scope="col">2134567</th>
      <th scope="col">Defining, designing, creating, and implementing a process to solve a challenge or meet an objective is the most valuable role… In EVERY group, company, organization and department.
</th>
      <th scope="col">DVD</th>
      <th scope="col">Gerardus</th>
      <th scope="col">Blokdyk</th>
      <th scope="col">5STARCooks</th>
      <th scope="col">Germany</th>
      <th scope="col">15 May 2020</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">9</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">ISBNcode</th>
      <th scope="col">Description</th>
      <th scope="col">Type</th>
      <th scope="col">Author_first_Name</th>
      <th scope="col">Author_last_Name</th>
      <th scope="col">Publisher_Name</th>
      <th scope="col">Publisher_Address</th>
      <th scope="col">Publish_Date</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <tr>
      <th scope="col">10</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">ISBNcode</th>
      <th scope="col">Description</th>
      <th scope="col">Type</th>
      <th scope="col">Author_first_Name</th>
      <th scope="col">Author_last_Name</th>
      <th scope="col">Publisher_Name</th>
      <th scope="col">Publisher_Address</th>
      <th scope="col">Publish_Date</th>
      <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
        <td><a href='details.php?id={$row["id"]}'>Details</a></td>
        <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    </tr>

    <a href="create.php"><button type="button" class="btn btn-primary">Create Entry</button></a> <br> -->
  

  </tbody>
</table>

    
    

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>