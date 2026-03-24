<?php 
// EXERCICE7//////////////////////////////////////////////////////////////////////////////
// En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for ($i=0; $i <=100 ; $i+= 15) { 
   ?>
    <h3><?= $i ?>- On tient le bon bout</h3>
    <?php } ?>
</body>
</html>