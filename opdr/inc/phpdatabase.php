<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameworldclass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$catId = $_GET['catId'];




$sql = "SELECT *
  FROM items
  WHERE Item_Catogorie = $catId";


$result = mysqli_query($conn, $sql);
  ?>
