<?php
require_once "db_connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM biglibrary WHERE id = $id";

if(mysqli_query($connect, $sql)){
    header ("Location:index.php");

}