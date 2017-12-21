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
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Positionering">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Devils World</title>
	</head>
	<body>
		<h1>
			<?php
			 		require 'Header/Header.php';
			?>
		</h1>
		<div id="catogories">
			<h1>Choose your catogorie</h1>
			<div>
				<div id="keys">
					<h1><a href="Catogories.php?catId=2">Key's</a></h1>
				</div>
				<div id="cars">
					<h1><a href="Catogories.php?catId=1">Cars</a></h1>
				</div>
				<div id="mystery_decals">
					<h1><a href="Catogories.php?catId=3">Mystery universal decals</a></h1>
				</div>
			</div>
		</div>
		<div id="items">

      <?php
      if (mysqli_num_rows($result) > 0) {
          // output data of each row


          while($row = mysqli_fetch_assoc($result)) {

            ?>
			<div id="Item_Name">

        <?php
        echo $row['Item_Name'];
         ?>

			</div>
      <div id="Item_Price">
        &euro;<?php
        echo $row['Item_Price'];
         ?>
      </div>
      <div id="Item_Image">
        <img src="images/<?php  echo $row['Image']; ?>">
      </div>
      <?php

          }
      } else {
          echo "0 results";
      }

      ?>



		</div>
	</body>
</html>
