<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 </title>
</head>
<body>

<p>Faire une fonction qui prend trois paramètres : 
le nom, le prénom et l'âge d'une personne.
 Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.</p>

<?php

function show($firstname, $lastname, $age) {

    return "Bonjour $firstname $lastname , tu as  $age ans.";
   
}

echo show('Noël', 'Félix', 21);

?>

</body>
</html>
