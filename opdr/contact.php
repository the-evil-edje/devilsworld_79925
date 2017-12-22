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
    <div class="whitebox-container">

  		<div class="description">
  			<div id="info">
  				<?php
  				//if "email" variable is filled out, send email
  				if (isset($_REQUEST['email']))  {

    					//Email information
  					$admin_email = "eddie.beelen@gmail.com";
  					$email = $_REQUEST['email'];
  					$subject = $_REQUEST['subject'];
  					$comment = $_REQUEST['comment'];

    					//send email
  					mail($admin_email, $subject, $comment, "From:" . $email);

    					//Email response
  					echo "Thank you for contacting us!";
  				}

    				//if "email" variable is not filled out, display the form
  				else  {
  					?>
  					<form method="post">

  						<h3>Email:</h3>
  						<br />
  						 <input name="email" type="text" />
  						<br />
  						<h3>Subject:</h3>
  						<br />
  						 <input name="subject" type="text" />
  						<br />
  						<h3>Message:</h3>
  						<br />
  						<textarea name="comment" rows="15" cols="40"></textarea>
  						<br />
  						<input type="submit" class=button value="Submit" />
  					</form>
  					<?php
  				}
  				?>

  				<?php
  				include("inc/footer.php")
  				?>
  </body>
</html>
