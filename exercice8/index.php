<?php
// EXERCICE8////////////////////////////////////////////////////////////////////////
// En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 200; $i >= 0; $i -= 12) {
    ?>
        <h3><?= $i ?>- Enfin !!!</h3>
    <?php   }  ?>
</body>

</html>