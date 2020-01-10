<?php
  $number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exo-4 Partie-III</title>
  </head>
  <body>
    <?php
      while ($number <= 10) {
    ?>
    <p> le nombre <?php echo $number; ?></p>
    <?php
      $number = $number + $number/2;
    }
     ?>
  </body>
</html>
