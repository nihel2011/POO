<?php

// require 'Personne.php';
function chargerClasse($classe){
    require $classe.".class.php";
}
spl_autoload_register('chargerClasse');


echo Personne::CENTRE;
//  new : permet d'instancier (créer) un objet 
// on a créé un objet p1 de type personne:
$p1 = new Personne("Boby","barry","boby@barry.com",34,01/02/1999);
$p2 = new Personne("Tom","Toto","Tom@gmail.com",3409,01/12/2020);
$p3 = new Personne("Gaston","Katy","katy@mail.com",19999,17/02/2023);

// $p1 ->nom = "Boby";
// $p1 ->prenom= "barry";
// $p1->email = "boby@barry.com";
// echo $p1->nom;
// echo $p1->prenom;
// echo $p1->email;
var_dump($p1);
// afficher la contenu du $p2 avec la function afficher()
// $p2->afficher();
// echo "<br>";

// echo "Nom = ".$p3 ->getNom() ." <br> Prenom = ".$p3->getPrenom() . "<br> Email = ".$p3->getEmail()."<br>";
// $p3->setNom("Mary<br>");
// echo "Nom = ".$p3 ->getNom()."<br>";

///////////////////////////////
// var_dump($p1);
// unset() : fct php permet de détruire un objet
// unset($p1);
// var_dump($p2);
// unset($p2);
//////////////////////////////
// echo "<br>";
// $p3->afficher();
////////////////////////////////
// EMPLOYER.PHP
$employer = new Employer("Toto","Marie","marie@gmail.com",28000);
var_dump($employer);
////////////////////////
// Etutiant.php
$etudiant = new Etudiant("Boby","Sami","sami@gmail.com",28);
var_dump($etudiant);

/////////////////////////////////////
// Formateur.php
$formateur = new Formateur(12,2,"PHP","Gaston","Tom","tom@gmail.com");
var_dump($formateur);
// //////////////////////////////////////////

// produit.php
$prod= new Produit ("ordinateur",100);
var_dump($prod);
/////////////////////////////
// Formatage.php
echo $p1->formatageChaine($p1->prenom);
?>