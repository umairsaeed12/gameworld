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

</div>
<h1>-About us</h1>
 </div>

 <div id="about-container">
         <nav class="main-nav">
      <?php
      include ("inc/menu.php");
       ?>
         </nav>
    </div>
         <div id="text">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan blandit lorem vitae sodales. Nam suscipit feugiat tellus, ut scelerisque ex faucibus sit amet. Nam vel rhoncus ante. Quisque cursus vestibulum libero interdum consequat. Suspendisse maximus quis mi vel luctus. Mauris convallis risus risus, sed aliquam dolor laoreet ac. Donec maximus turpis non neque convallis rhoncus. Mauris non ultrices orci. Vivamus suscipit eros mauris, ut sodales nibh scelerisque in. Sed tincidunt ligula cursus dolor fringilla faucibus. Nunc id arcu eros. Maecenas tempus, mi ut iaculis consequat, augue nibh condimentum nisi, nec pharetra eros purus id nisi. Cras faucibus blandit diam, pretium interdum lectus sollicitudin ut. Mauris ante sem, consequat in suscipit in, pharetra id justo. Nunc vulputate eros ligula, sed porta leo ultricies sed.
           Etiam sagittis, ex sodales ornare bibendum, lacus nisl mollis lacus, cursus varius arcu nisl ut leo. Nunc placerat eros sem, sed fringilla ligula lacinia id. Morbi sit amet dapibus enim, in consectetur velit. Cras sem nulla, dignissim in rhoncus eget, lacinia in velit. Integer sit amet varius diam. Nam bibendum nulla quis mauris volutpat pharetra. Cras in sagittis felis. Donec lobortis nibh eu ex congue, a venenatis dui consectetur. Donec eget leo ut diam rutrum ullamcorper. Cras elementum dui nibh, pharetra dictum dui vehicula vel. Proin aliquet mollis volutpat. Ut et varius justo, ac congue arcu. Nam sed molestie nibh, eu mattis nisl. Nam eu elementum sem.
           <a href="contact.php">Click here if you want to contact us</a>

         </div>
         <div id="pic-box1">
           <img src="images/about.gif" height="200px" >
         </div>

         <div class="footerindex">
           <?php
           if(file_exists($footer))
             {
               include($footer);
             }

         ?>
         <p>Made by Umair Saeed    |     ROC Ter AA     | © 2017</p>

  </div>
