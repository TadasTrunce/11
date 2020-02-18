<?php
namespace Ufo;

class Nso extends Area52
{
    public static $A = 'AAAAA';
    public $B = 'BBBBB';

    public static $C = 'CITRINA-NSO';

    public static $lekste;

    public function __construct()
    {
        self::$lekste = $this;
    }
    
    
    public static function raketa()
    {
        echo '<h1>Raketa isskrido, Ate '.static::$A.'</h1>';
        var_dump(self::$lekste);
    }




}