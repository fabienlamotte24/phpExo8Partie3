<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
<?php
/*Utilisation de la boucle for
1 - Variable qui débute à 200
2 - Tant que $pas est suppérieur à 0
3 - Décrémentation par 12 (on retire 12 à la valeur)*/
  for ($pas = 200; $pas >= 0; $pas -= 12){
    /*Affichage*/
    echo $pas . ' pas, enfin !!!<br />';
  }
 ?>
    </p>
  </body>
</html>
