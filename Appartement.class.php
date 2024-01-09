<?php 

class Appartement extends Geometrie{
    // $tableau= array(larg1=>long1,larg2=>long2,larg3=>long3,...);
public static $surfaceAppartement;

public function __construct(){


}
public static function calculerSurfaceAppartement($tableau){
    $somme =0;
    foreach($tableau as $larg=>$long){
        self::calculerSurfaceRectangle($long,$larg);
        $somme =+self::$surfaceRectangle;
    }
    return $somme;
}

} 
// traitement
// Appartement::calculerSurfaceRectangle(15,10);
// echo "La surface du rectangle (L=15,l=10) est : " .Appartement::$surfaceRectangle."<br>";

echo Appartement::calculerSurfaceAppartement(array(10=>15, 5=>13));