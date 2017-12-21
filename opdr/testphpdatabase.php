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

$sql ="SELECT *
  FROM items
  WHERE Item_ID = 7 ";

  $result_table = mysqli_query($conn, $sql);
  $items = array();
  while($row = mysqli_fetch_assoc($result_table))
  {
    $items[] = $row;
  }

  $item=1;
  foreach($items as $key => $vader)
  {
    echo "key: ", $key, "\n";
    var_dump ($vader);
  }
  ?>
<html>
  <form name="" action="addToCart.php" method="POST">
    <?php
    $item = 1;
    foreach ($items as $key => $item_ID) {
      # code...
    }?>
</html>
<?php
$sql ="SELECT *
  FROM items
  WHERE Item_ID = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


    while($row = mysqli_fetch_assoc($result)) {
      echo $row['Item_Name'];
      echo $row['Item_Price'];
    }
} else {
    echo "0 results";
}
?>




mysqli_close($conn);
?>
