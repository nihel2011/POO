<?php 
// Heritage: 
class Etudiant extends Personne{
    private $numEtudiant;
    public function __construct($n, $p, $e,$num){
        parent::__construct($n,$p,$e);
        $this->numEtudiant = $num;
    }
    
}

?>