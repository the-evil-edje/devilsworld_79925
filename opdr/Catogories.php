<!DOCTYPE html>
<?php
    require 'inc/phpdatabase.php';
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
      <div>


        <div id="Item_Image">
          <img src="images/<?php  echo $row['Image']; ?>">
        </div>
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
        <button type="button" name="order">Order</button>
      </div>

      <?php

          }
      } else {
          echo "0 results";
      }

      ?>



		</div>
    <?php
    include("inc/footer.php")
    ?>
	</body>
</html>
