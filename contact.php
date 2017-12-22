<?php
//if "email" variable is filled out, send email
	if (isset($_REQUEST['email']))  {
//Email information
$admin_email = "umair_saeed32@hotmail.nl";
	$subject = $_REQUEST['yourname'];
  $email = $_REQUEST['email'];
	$comment = $_REQUEST['comments'];
//send email
	mail($admin_email, $subject, $comment, "From:" . $email);
//Email response
	}
//if "email" variable is not filled out, display the form
	else  {
		?>

	<?php
				}
	?>
  <?php
$footer = "inc/footer.php";
 ?>
 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
    <meta name="description" content="Game World">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <title>GameWorld</title>
 </head>
 <body>
 <div class="logo">
   <a href="index.php">Game World</a>
      <h1>-Contact</h1>
</div>
     <nav class="main-nav">
       <?php
      include "inc/menu.php"
       ?>
      </nav>
        <div id= "form">
      <form action="" method="post">
      <p>Your Name: <input type="text" name="yourname" /><br />
      E-mail: <input type="text" name="email" /></p>
      <p>Do you like this website?
      <input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
      <input type="radio" name="likeit" value="No" /> No
      <input type="radio" name="likeit" value="Not sure" /> Not sure</p>

      <p>Your comments:<br />
      <textarea name="comments" rows="10" cols="40"></textarea></p>

      <p><input class="buy" type="submit" value="Send it!"></p>
      </form>

      </div>
      <div id="pic-box">
        <img src="images/contact.gif" height="200px" >
      </div>
      <div class="contactfooter">
        <?php
        if(file_exists($footer))
          {
            include($footer);
          }
      ?>
      <p>Made by Umair Saeed    |     ROC Ter AA     | © 2017</p>
</div>
</body>
