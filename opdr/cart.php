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



$sql = "SELECT *
	FROM items
	WHERE Item_ID = 3";



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
			 		require 'inc/Header.php';
			?>
		</h1>
		<div>
			<?php
			if (mysqli_num_rows($result) > 0) {
					// output data of each row


					while($row = mysqli_fetch_assoc($result)) {

						?>
						
			<?php echo $row['Item_Name']; ?>
		</div>
		<?php
    include("inc/footer.php")
    ?>
	</body>
</html>
