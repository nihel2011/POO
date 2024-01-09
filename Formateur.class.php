<?php 
 class Formateur{
    private $id;
    private $classe;
    private $matiere;
    public function __construct($id,$c,$m){
      $this->id = $id;
      $this->classe = $c;
      $this->matiere=$m;
   }
   public function getId (){
      return $this-> id;
   }
   public function getClasse (){
       return $this->classe;
   }
   public function getMatiere (){
       return $this->matiere;
   }    
   public function setId ($id){
      $this->id = $id;
  }
  public function setClasse($c){
      $this->classe = $c;
  }
  public function setMatiere($m){
      $this->matiere = $m;
  }
  
 }

?>