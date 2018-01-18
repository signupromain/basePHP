<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemples boucles et conditions</title>
</head>
<body>
<h1>Exemples boucles et conditions</h1>
<h2>Imbrication des conditions</h2>
<p>Les conditions peuvent être imbriquées une dans l'autre</p>
<?php
$hasard1 = mt_rand(1,10);
$hasard2 = mt_rand(10,20);

if($hasard1 >= 5){ // $hasard1 est plus grand ou égal à 5

    if($hasard2 >= 15){ // $hasard2 est >= à 15
        echo "if-if Le total des chiffres au hasard sera au minimum 20 et au maximum 30 => $hasard1 + $hasard2 =>".($hasard1 + $hasard2);

    }else{ // hasard2 est plus petit que 15
        echo "if-else Le total des chiffres au hasard sera au minimum 15 et au maximum 24 => $hasard1 + $hasard2 =>".($hasard1 + $hasard2);

    }

}else{ // $hasard1 est plus petit que 5

    if($hasard2 >= 15){ // $hasard2 est >= à 15
        echo "else-if Le total des chiffres au hasard sera au minimum 16 et au maximum 24 => $hasard1 + $hasard2 =>".($hasard1 + $hasard2);
    }else{ // hasard2 est plus petit que 15
        echo "else-else Le total des chiffres au hasard sera au minimum 11 et au maximum 18 => $hasard1 + $hasard2 =>".($hasard1 + $hasard2);
        echo "<script>
alert('coucou');
</script>";
    }

}
?>
<h2>Imbrication des boucles</h2>
<p>Les boucles peuvent être imbriquées une dans l'autre, ! pour la boucle for de changer de nom de variable d'itération ($i) pour éviter la colision de variable</p>
<?php

for($i=1; $i<=12; $i++){
    echo "$i) ";
    for($a=1; $a<=6; $a++){
        echo ($i+$a)." ";
    }
    echo"<br>";
}

?>
</body>
</html>
