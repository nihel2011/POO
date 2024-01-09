<?php 
// classe: modéle qui définit un objet =ensemble d'attributs(variable)+ ensemble de méthode(fonction)
// objet: instance
// visibilité : private - /public + / protected #  (heritage)
 class Produit{
    // attributs:
    private $nom;
    private $prix;
    // les getters=>  récupérer les info
// les setters =>  modifier les info
    // constructeur : fonction qui permet d'initialiser un objet

    public function __construct($n,$p){
        // $this : toujours a l'interieur de la classe 
        $this->nom = $n;
        $this->prix = $p;
    }
    // les getters=> permettent de récupérer les valeurs de l'ensemble d'attributs de la classe

    public function getNom (){
        return $this-> nom;
     }
     public function getPrix (){
         return $this->prix;
     }
// les setters => permettent de modifier les valeurs de l'ensemble des attributs
public function setNom($n){
    $this->nom = $n;
}
public function setPrix($p){
    $this->prix = $p;
}
     
}

 ?>