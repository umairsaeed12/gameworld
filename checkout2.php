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
   <h1>-Checkout</h1>
</div>
 <body>


     <nav class="main-nav">
       <?php
      include "inc/menu.php"
       ?>
      </nav>

</div><?php
session_start();
require("functions.php");
//VARIABLES//
$conn = connectToDB();
$myselectedGames = array();
if (isset($_SESSION['spelIds']))
{
  foreach ($_SESSION['spelIds'] as $key => $value)
  {
    $sql = "select * from games where gameId = " . $value;

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
      $myselectedGames[] = $row;
    }
  }
}
/*
echo "<pre>";
var_dump($myselectedGames);
echo "</pre>";
*/
?>
  <table border="10">
    <thead>
      <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>

      <?Php
      $totalprice = 0;
      foreach ($myselectedGames as $myGames) {
        $totalprice= $totalprice +  $myGames['gamePrice'];
        ?>
        <tr>
          <td><img src="images/<?php echo $myGames['gameImage']; ?>" width="200"> </td>
          <td><?php echo $myGames['gameTitle'];?></td>
          <td>&euro;<?php echo $myGames['gamePrice'];?></td>
        </tr>
    <?php } ?>
    <tr>
      <td colspan="2">Total price :</td>
      <td>&euro; <?php echo $totalprice;?></td>
    </tr>
    </tbody>
  </table>
  <div id="clear-button">
    <p><a href="clear.php">Clear</a></p>
  </div>
  <div id="footercheckout">
    <?php
    if(file_exists($footer))
      {
        include($footer);
      }
  ?>
  <p>Made by Umair Saeed    |     ROC Ter AA     | © 2017</p>
  </div>
</body>
</html>
