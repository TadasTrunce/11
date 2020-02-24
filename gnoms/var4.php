<?php

$stops = [];
$buses = [];
$busA_capacity = 10;
$busB_capacity = 10;

foreach(range('A','J') as $stop) {

    $stops[$stop] = [];
    $pass = rand(0, 10);
    $stops[$stop]['gnoms'] = rand(0, $pass);
    $stops[$stop]['elfs'] = rand(0, $pass-$stops[$stop]['gnoms']);
    $stops[$stop]['goblins'] = $pass-$stops[$stop]['gnoms']-$stops[$stop]['elfs'];

}

// surinkimas
$busNow = 0;

do {
    $busNow++;
    $buses[$busNow] = (rand(0,1)) ? $busA_capacity : $busB_capacity;
    foreach ($stops as &$stop) {
        if($buses[$busNow]) {
        _dc($buses);
        _dc($stops);
        
        }

        if ($stop['gnoms'] <= $buses[$busNow]) {// telpa visi gnomai
            $buses[$busNow] = $buses[$busNow] - $stop['gnoms'];
            $stop['gnoms'] = 0;
        }
        else {
            $stop['gnoms'] = $stop['gnoms'] - $buses[$busNow];
            $buses[$busNow] = 0;
        }



        if ($stop['elfs'] * 3 <= $buses[$busNow]) {// telpa visi elfai
            $buses[$busNow] = $buses[$busNow] - $stop['elfs'] * 3;
            $stop['elfs'] = 0;
        }
        else {
            $elfs = floor($buses[$busNow] / 3);
            $stop['elfs'] = $stop['elfs'] - $elfs;
            $buses[$busNow] = $buses[$busNow] % 3;
        }


        if ($stop['goblins'] * 7 <= $buses[$busNow]) {// telpa visi elfai
            $buses[$busNow] = $buses[$busNow] - $stop['goblins'] * 7;
            $stop['goblins'] = 0;
        }
        else {
            $goblins = floor($buses[$busNow] / 7);
            $stop['goblins'] = $stop['goblins'] - $goblins;
            $buses[$busNow] = $buses[$busNow] % 7;
        }


    }
} while(inStops($stops) > 0);

function inStops($stops){
    $count = 0;
    foreach($stops as $stop) {
        $count += array_sum($stop);
    }
 return $count;
}


