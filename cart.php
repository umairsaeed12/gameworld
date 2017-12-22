<?php
// cart.php
session_start();
/*
echo "<pre>";
var_dump($_POST);
echo "</pre>";
*/
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  foreach ($_POST['selectedId'] as $key => $value) {
    # code...
  //  echo "the key is " . $key . "  and the value is " . $value;
  //  echo "<br />";
    $_SESSION['spelIds'][] = $value;
  }
}

header("location:checkout2.php");
?>
