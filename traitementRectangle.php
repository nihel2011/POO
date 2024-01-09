<?php
// require 'Rectangle.php';
function chargerClasse($classe){
    require $classe.".class.php";
}
spl_autoload_register('chargerClasse');

$r1 = new Rectangle (12,3);
$r2 = new Rectangle (50,30);
echo $r1->longueur;
var_dump($r1);


// echo "Longueur = ".$r1 ->getLongueur() ." <br> Largeur = ".$r1->getLargeur();
// var_dump($r2);
// $r2->setLongueur(40);
// $r2->setLargeur(20);

// echo "<br> Longueur = ".$r2 ->getLongueur() ." <br> Largeur = ".$r2->getLargeur(). "<br>";
echo $r1-> surfaceRectangle() ."<br>";
echo $r2-> surfaceRectangle();

/////////////////////////////////////////
// Appartemen.php

// // calculer la surface d'un rectangle (larg = 10, long=15) à partir  de la classe appartement
// Appartement::calculerSurfaceRectangle(15,10);
// echo "La surface du rectangle (L=15,l=10) est : " .Appartement::$surfaceRectangle."<br>";
