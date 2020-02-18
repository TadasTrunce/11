<?php
use Ufo\Nso;
use Ufo\Area52;

spl_autoload_register(function ($class) {

    $prefix = '';
    $base_dir = __DIR__ . '/class/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';



    if (file_exists($file)) {
        require $file;
    }
});


// require __DIR__ .'/class/Area52.php';
// require __DIR__ .'/class/Nso.php';



$obj = new Nso;

// $obj->lekste();
Nso::$lekste->lekste()->lekste()->lekste();

echo $obj->B;
// echo $obj->A;// pasiekti negali, nes statinis


// Nso::lekste();
// Nso::raketa();

// echo Nso::$B; // pasiekti negali, nes ne statinis
// echo Nso::$A;

_dc(Nso::$C);

