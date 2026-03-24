<?php
// EXERCICE5////////////////////////////////////////////////////////////////////////////
// En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 1; $i <= 15; $i++) {
    ?>
        <h3> <?= $i ?> - On y arrive presque</h3>

    <?php  }  ?>

</body>

</html>