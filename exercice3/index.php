<?php 
// EXERCICE3///////////////////////////////////////////////////////////////////
// Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas inférieure ou égale à 10 :

// multiplier la première variable avec la deuxième
// afficher le résultat
// décrémenter la première variable
$var1 = 100;
$var2 = 2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php function muliplier($var1, $var2) {?>
    <?php return $var1*$var2 ?>
   <?php } ?> 
    <?php while ($var1 >=10 ) {
    ?>
    <h2><?php $resultat = $var1*$var2 ?></h2>
    <?= $resultat ?>
    <?php $var1 -=1 ?>
    <?php  } ?>
</body>
</html>