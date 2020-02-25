<?php
require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Grybas.php';

$krepsys = new Krepsys;

while($krepsys->rinkti(new Grybas)){echo '|';}

_dc($krepsys->kiekis);