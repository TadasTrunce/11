<?php
echo 'LABAS KLASE<br>';

class Gamta
{
    public $A = 55;
    public function __construct()
    {
        echo '<br>PASILEIDO GAMTA</br>';
    }
}


class Miskas extends Gamta
{
        
    protected $age = 12;
    public $color = 'Brown';

    
    public function __construct()
    {
        parent::__construct();
        echo '<br>PASILEIDO MISKAS</br>';
    }
    public function age($age) // seteris
    {
        if ($age > 21) {
            echo '<br>Nesamone<br>';
            return;
        }
        $this->age = $age;
    }

    public function showAge() // geteris
    {
        return $this->age;
    }


}


class Bebras extends Miskas
{
    public function __toString()
    {
        return 'Bebro stringas';
    }

    public function __invoke()
    {
        return 'Bebro invoukas';
    }


    

    public function __construct($color = 'yellow')
    {
        $this->color = $color;
        parent::__construct();
        $this->age = rand(1, 20);
        echo '<br>PASILEIDO BEBRAS</br>';
    }
}

class Barsukas extends Miskas
{


    
    public function age($age) // seteris
    {
        if ($age > 31) {
            echo '<br>Nesamone<br>';
            return;
        }
        $this->age = $age;
    }

}

$bebras1 = new Bebras;
$barsukas1 = new Barsukas;

// $bebras1->age(3);
var_dump($barsukas1->showAge());
$barsukas1->age(18);

var_dump($barsukas1->showAge());
// echo '<br>';
// var_dump($bebras1->color);

var_dump($bebras1);
echo '<br>';
var_dump($barsukas1->A);
echo '<br>';

echo $bebras1();
