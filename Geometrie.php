<?php

class Geometrie{
    const PII= M_PI; 
    // const PII=3.14;
    public static $surfaceCercle;
    public static $surfaceRectangle;

// CERCLE
    public static function calculerSurfaceCercle($rayon){
        self::$surfaceCercle = self::PII*$rayon*$rayon;

    }
    public static function calculerPerimetreCercle($rayon){
        return 2*self::PII*$rayon;

    }
    // RECTANGLE
    public static function calculerSurfaceRectangle($long,$larg){
        self::$surfaceRectangle = $long*$larg;

    }
    public static function calculerPerimetreRectangle($long, $larg){
        return 2*($long+$larg);

    }

}
// traitement:
// cercle
Geometrie::calculerSurfaceCercle(11);
echo "La surface du cercle (R=11) est : " .Geometrie::$surfaceCercle."<br>";
echo"Le perimetre du cercle  (R=11) est : ". Geometrie::calculerPerimetreCercle(11);
// rectangle
Geometrie::calculerSurfaceRectangle(11,8);
echo "<br>La surface du rectangle (L=11,l=8) est : " .Geometrie::$surfaceRectangle."<br>";
echo"Le perimetre du rectangle  (L=11,l=8) est : ". Geometrie::calculerPerimetreRectangle(11,8);
