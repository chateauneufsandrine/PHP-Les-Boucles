<?php
// EXERCICE6////////////////////////////////////////////////////////////////////////////
// En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 20; $i >= 0; $i--) {
    ?>
        <h3><?= $i ?>- C'est presque bon</h3>
    <?php }  ?>
</body>

</html>