<?php 
// require 'Personne.class.php';
class Employer extends Personne{
    private $salaire;
    public function __construct($n, $p, $e,$s){
        // $this->nom = $n;
        // $this->prenom = $p;
        // $this->email = $e;
        parent::__construct($n,$p,$e);
        $this->salaire = $s;
    }
    
}

?>