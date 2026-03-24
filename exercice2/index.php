<?php
// EXERCICE2///////////////////////////////////////////////////////////////
// Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas supérieure à 20 :

// multiplier la première variable avec la deuxième
// afficher le résultat
// incrementer la première variable
$var1 = 0;
$var2 = 40;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php function multiplier($var1, $var2)
    { ?>
        <?php return $var1 * $var2; ?>

    <?php  } ?>

        <?php while ($var1 < 20) { ?>
            <?php $resultat = $var1 * $var2 ?>
           <h2><?= $resultat ?></h2> 
            <?php $var1 += 1 ?>
        <?php } ?>



</body>

</html>