<?php
// Déclaration des variables
$produit = 1;

// Demander la taille du tableau à l'utilisateur
echo "Quelle est la taille de votre tableau : ";
$t = readline();

// Demander à l'utilisateur d'entrer les éléments à multiplier
echo "Entrez les éléments à multiplier :\n";
for ($i = 1; $i <= $t; $i++) {
    echo "Élément $i : ";
    $element[$i] = readline();
    $produit *= $element[$i];
}


// Afficher le produit de tous les éléments
echo "Le produit de tous vos éléments est : $produit\n";
?>
