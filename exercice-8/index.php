<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 </title>
</head>
<body>

<p>Faire une fonction qui prend en paramètre trois nombres 
et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.</p>

<?php


function show($nbr1 = 1, $nbr2 = 2, $nbr3 = 5) {

    return $nbr1 + $nbr2 + $nbr3 ;

}

echo show(5 , 25 , 60);

?>
</body>
</html>
