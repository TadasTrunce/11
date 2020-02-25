<?php
require __DIR__ . '/Pinigine.php';

$pinigine = new Pinigine;

foreach(range(1, 100) as $val) {
    $pinigine->ideti(rand(1, 5));
}

echo $pinigine->skaiciuoti();

_dc($pinigine->skaiciuoti4());