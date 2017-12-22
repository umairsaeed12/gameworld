<?php
$footer = "inc/footer.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
    <meta name="description" content="Game World">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <title>GameWorld</title>
 </head>
 <div class="logo">
   <a href="index.php">Game World</a>
      <link rel="icon" href="images/fifaps4.png">

</div>
 <body>

 <div id="main-container">
   <div class="centered"><marquee>Welcome to the Game World  </marquee></div>
     <nav class="main-nav">
       <?php
      include "inc/menu.php"
       ?>
      </nav>

</div>
<div class="ps4-box" >
    <a class="cat-block" href="games.php?gameCategoryId=1"></a>
</div>
<div class="xbox-box">
  <a class="cat-block" href="games.php?gameCategoryId=2"></a>
</div>
<div class="pc-box">
  <a class="cat-block" href="games.php?gameCategoryId=3"></a>
</div>
<div class="footerindex">
  <?php
  if(file_exists($footer))
    {
      include($footer);
    }
?>
<p>Made by Umair Saeed    |     ROC Ter AA     | © 2017</p>
</body>
</html>
