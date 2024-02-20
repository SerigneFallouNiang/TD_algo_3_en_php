<?php
// Demander la taille du premier tableau à l'utilisateur
echo "Quelle est la taille de votre tableau 1 : ";
$t1 = intval(readline());
$tableau1 = [];

// Demander à l'utilisateur d'entrer les éléments du premier tableau
for ($i = 0; $i < $t1; $i++) {
    echo "Entrer l'élément $i : ";
    $element1 = readline();
    $tableau1[] = $element1;
}

// Demander la taille du deuxième tableau à l'utilisateur
echo "Quelle est la taille de votre tableau 2 : ";
$t2 = intval(readline());
$tableau2 = [];

// Demander à l'utilisateur d'entrer les éléments du deuxième tableau
for ($i = 0; $i < $t2; $i++) {
    echo "Entrer l'élément $i : ";
    $element2 = readline();
    $tableau2[] = $element2;
}

// Comparer les éléments des deux tableaux et afficher ceux qui sont égaux
foreach ($tableau1 as $element1) {
    foreach ($tableau2 as $element2) {
        if ($element1 == $element2) {
            echo " les resemblances se porte sur :  $element1\n";
        }
    }
}
?>

