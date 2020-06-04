<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
</head>
<body>

<p>Faire une fonction qui prend en paramètre deux nombres.
 La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand 
que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit 
que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux</p>

<?php

function show($nbr1, $nbr2) {

    if ($nbr1 > $nbr2) {
        echo 'le premier nombre est plus grand ';
    }
    else if ($nbr1 < $nbr2) {
        echo 'le premier nombre est plus petit ';
    }
    else if ($nbr1 == $nbr2) {
        echo 'Les deux nombres sont identiques';
    }
   
}

echo show(1, 1);

?>

</body>
</html>
