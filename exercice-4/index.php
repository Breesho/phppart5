
<?php

$array = array (
    "janvier" ,
    "février" ,
    "mars" ,
    "avril",
    "mai" ,
    "juin",
    "juillet" ,
    "aout",
    "septembre",
    "octobre" ,
    "novembre",
    "décembre",
);
$array[7] = "août";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
</head>
<body>

<p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>

<p><?php print_r($array) ?></p>


</body>
</html>
