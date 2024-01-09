<?php 
class Rectangle {
    private $longueur;
    private $largeur;
    public $surface;

//     // les getters
// public function getLongueur(){
//     return $this->longueur;
// }
// public function getLargeur(){
//     return $this->largeur;
// }
// // les setters
// public function setLongueur($long){
//     $this-> longueur = $long;
// }
// public function setLargeur($larg){
//     $this-> largeur = $larg;
// }
// getter __magique php
public function __get($var){
    return $this->$var;
}
// setter __magique php
public function __set($var,$val){
    $this->$var = $val;
}
// Constructeur
public function __construct($long,$larg){
    $this->longueur = $long;
    $this->largeur = $larg;
}
public function surfaceRectangle() {
    $this->surface= $this->longueur * $this->largeur;
    
}
}


?>