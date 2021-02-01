<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php
         include_once 'head.php';
    ?>
  </head>


  <body>
  <div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
     
     
      <li><a href="index.php">Početna</a></li>
      
    </ul>
  </div>
  
</div>
<form class="box" action="nadzornaploca.php" method="POST">
    <h1>Prijava</h1>
    <input type="text" name="" placeholder="Korisnicko ime">
    <input type="password" name="" placeholder="Lozinka">
    <input type="submit" name="" href="nadzornaploca.php" placeholder="Prijava" value="Prijava">
 </form>





    <?php
        include_once 'skripte.php';
        
    ?>

  </body>
</html>