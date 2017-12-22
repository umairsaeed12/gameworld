<?php
$pages = array(
  array("Home","index.php"),
  array("Games","games.php"),
  array("About us","about.php"),
  array("Contact","contact.php"),


);
 ?>
 <ul>
   <?php

   foreach ($pages as $page )
   {
    ?>
    <li><a href="<?php echo $page[1];?>"><?php echo $page[0];?></a>
      <?php
   }
    ?>
  </ul>
