<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 </title>
</head>
<body>

<p>Faire une fonction qui prend deux paramètres :
 l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme  

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes majeure

Gérer tous les cas.</p>

<?php

function show($age, $gender) {

 if ($gender == 'Homme' && $age >= 18) {
     echo 'Vous êtes un homme et vous êtes majeur';
 }
  else if ($gender == 'Homme' && $age <= 18) {
    echo 'Vous êtes un homme et vous êtes mineur';
} 
 else if ($gender == 'Femme' && $age >= 18) {
    echo 'Vous êtes une femme et vous êtes majeure';
}
else if ($gender == 'FEmme' && $age <= 18) {
    echo 'Vous êtes une femme et vous êtes majeure';
}
}

echo show(21, 'Homme');

?>

</body>
</html>
