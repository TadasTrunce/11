<?php

$stops = [];
$buses = [];
$bus_capacity = 40;
foreach(range('A','J') as $stop) {
    $stops[$stop] = rand(0, 10);
}

// surinkimas
$busNow = 0;

do {
    $busNow++;
    $buses[$busNow] = 40;
    foreach ($stops as &$stop) {
        _dc($stops);
        _dc($buses);
        if ($stop <= $buses[$busNow]) {// telpa visi gnomai
            $buses[$busNow] = $buses[$busNow] - $stop;
            $stop = 0;
        }
        else {
            $stop = $stop - $buses[$busNow];
            $buses[$busNow] = 0;
        }
    }
} while(array_sum($stops) > 0);




