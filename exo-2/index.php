<?php
  $firsNumber = 0;
  $secondNumer  = rand(1, 100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exo-2 Partie-2</title>
  </head>
  <body>
    <?php
      while ($firsNumber < 20){
        ?>
        <p> <?php echo ($firsNumber * $secondNumer); ?></p>
        <?php
        $firsNumber++;
      }
     ?>
  </body>
</html>
