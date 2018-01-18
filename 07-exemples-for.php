<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>For avec des arrays</title>
</head>
<body>
<h1>For avec des arrays</h1>
<p>La boucle for peut être utilisée pour afficher les éléments d'un tableau indexé non modifié. Elle ne fonctionne pas avec les tableaux relatifs (on utilisera alors foreach ou les variantes de while).</p>
<?php
// tableau indexé
$tabIndex = ["un",'deux',"trois","quatre","cinq","six","sept","huit","neuf","dix","onze","douze"];

// on va compter le nombre d'entrées dans le tableau ! count(array) commence à compter à 1
$compte = count($tabIndex);

// affichage de tous les éléments avec la boucle for
for($i=0; $i<$compte; $i++){
    echo $tabIndex[$i]." ";
}
?>
</body>
</html>
