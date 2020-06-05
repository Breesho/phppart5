
<?php

    $array = [02 => 'Aisne' , 59 => 'Nord', 60 => 'Oise',  62 => 'Pas-de-Calais',  80 => 'Somme'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 </title>
</head>
<body>


<p> Avec le tableau de l'exercice 5,
    afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
    Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département</p>


    <?php foreach ($array as $value => $element) { ?>

    <p> <?= "Le département est $element à le numéro ($value) "?> </p>
    
    <p> <?= "Le département est" . $element . "à le numéro (" . $value . ")" ?> </p>

    <?php } ?>


</body>
</html>