<?php
require("functions.php");
//VARIABLES//
$conn = connectToDB();
$menu = "menu.php";
$footer ="inc/footer.php";

if (isset($_GET["gameCategoryId"])) {
    $idcat = $_GET["gameCategoryId"];
  $sql = "SELECT * FROM `games` WHERE `gameCatogeryId` = ".$idcat;

}else{
    $sql = "SELECT * FROM games";
}

$result = $conn->query($sql);
// $rows = $result->fetch_all(MYSQLI_ASSOC);
?>
 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
    <meta name="description" content="Game World">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <title>GameWorld</title>
 </head>
 <div class="logo">
   <a href="index.php">Game World</a>
   <h1>-Games</h1>
</div>
 <div id="game-container">
     <nav class="main-nav">
       <?php
      include "inc/menu.php"
       ?>
      </nav>
    </div>
    <div id= "container">
      <form class="" action="cart.php" method="post">
        <div id="banner">
        <?php
        if (isset($_GET["gameCategoryId"])) {
        if ($idcat == 1)
        {
            echo "<p>Playstation 4 </p>";
        }
        else if ($idcat == 2)
         {
            echo "<p> Xbox </p>";
        }
        else if ($idcat == 3)
         {
            echo "<p> PC </p>";
        }
        else if ("")
         {}
         }
             ?>
           </div>
          <?php
          if ($result->num_rows > 0) {
                  //Output data of each row
                 while($row = $result->fetch_assoc()) {
          ?>
          <div class="red-box">
            <img src="images/<?php echo $row['gameImage']; ?>" width="220"  height="270" />
              <h3><?php echo $row['gameTitle']; ?></h3>
            <div class="price">&euro;<?php echo $row['gamePrice']; ?></div>
            <input type="checkbox" name="selectedId[]" value="<?php echo  $row['gameId']; ?>">
          </div>
          <?php
              }

              }
              else {
                  echo "No results";
              }
          ?>
      <input class="button" type="submit" name="mysubmit" value="Buy" />
          </form>
      </div>
    <div id="footer">
      <?php
      if(file_exists($footer))
        {
          include($footer);
        }
    ?>
    <p>Made by Umair Saeed    |     ROC Ter AA     | © 2017</p>
    </div>
  
