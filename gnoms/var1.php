<?php

$stops = [];
$buses = [];
$bus_capacity = 40;

foreach(range('A','J') as $stop) {
    $stops[$stop] = rand(0, 10);
}

$gnoms = array_sum($stops);

$needBuses = ceil($gnoms / $bus_capacity);

_dc($stops);
_dc($needBuses);