<?php
  $firsNumber = 100;
  $secondNumer  = rand(1, 100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exo-2 Partie-3</title>
  </head>
  <body>
    <?php
      while ($firsNumber >= 10){
    ?>
       <p><?php echo ($firsNumber * $secondNumer); ?></p>
    <?php
        $firsNumber--;
      }
    ?>
  </body>
</html>
