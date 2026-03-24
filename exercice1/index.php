<?php
// EXERCICE1////////////////////////////////////////////////
// Créer une variable et l'initialiser à 0.
// Tant que cette variable n'atteint pas 10, il faut :

// l'afficher
// l'incrementer
$compteur = 0;



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
    while ($compteur <= 10) { ?>
        <h1><?= $compteur ?></h1>
        <?php $compteur += 1  ?>
    <?php } ?>

</body>

</html>