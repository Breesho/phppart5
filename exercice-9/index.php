

<?php

    $array = [02 => 'Aisne' , 59 => 'Nord', 60 => 'Oise',  62 => 'Pas-de-Calais',  80 => 'Somme'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 </title>
</head>
<body>

<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>


<?php foreach ($array as $element) { ?>

<p> <?= $element ?>     </p>

<?php } ?>


</body>
</html>
