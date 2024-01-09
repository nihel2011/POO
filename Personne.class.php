
<?php
require 'Formatage.php';
class Personne implements Formatage{
    // Attributs
    private $nom;
    private $prenom;
    private $email;
    private $nbr;
    private $date;
    const CENTRE="eclyCentre";
    //  Methode /  Fonction
    // constructeur : fonction qui permet d'initialiser un objet
    public function __construct($n,$p,$e,$num,$d){
        // $this : toujours a l'interieur de la classe 
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
        $this->nbr = $num;
        $this->date= $d;

    }
    // public function afficher(){
    //     echo "Nom = ".$this ->getNom() ." <br> Prenom = ".$this->getPrenom() . "<br> Email = ".$this->getEmail();
    //     echo "<br> Centre  ".self::CENTRE;
    //     // self::nom_constante => pour afficher les constantes a l'interieur de la classe 

    // }
    public function nomFonction(){

    }
    public function __get($var){
        return $this->$var;
    }
    // setter __magique php
    public function __set($var,$val){
        $this->$var = $val;
    }
    
    // les getters=> permettent de récupérer les valeurs de l'ensemble d'attributs de la classe
// public function getNom (){
//    return $this-> nom;
// }
// public function getPrenom (){
//     return $this->prenom;
// }
// public function getEmail (){
//     return $this->email;
// }    
// les setters => permettent de modifier les valeurs de l'ensemble des attributs
// public function setNom($n){
//     $this->nom = $n;
// }
// public function setPrenom($p){
//     $this->prenom = $p;
// }
// public function setEmail($e){
//     $this->email = $e;
// }
public function __destruct(){
    // destruct ne contient aucun param, et ne retourne pas
    // echo "La personne   ".$this->nom ."  n'existe plus <br>";
}
public function formatageChaine($chaine){
 return   strtoupper($chaine);
}
public function formatageNum($number){
    return number_format($number,2,",","");
}
public function formatageDate($date){
    return date_format($date,$date);
}

} 




?>