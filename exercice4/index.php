<?php
// EXERCICE4/////////////////////////////////////////////////////////////////////
// Créer une variable et l'initialiser à 1.
// Tant que cette variable n'atteint pas 10, il faut :

// l'afficher
// l'incrementer de la moitié de sa valeur
$var1 = 1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    while ($var1 < 10) {
    ?>
        <h2><?= $var1 += $var1 / 2 ?> </h2>
    <?php }  ?>
</body>

</html>