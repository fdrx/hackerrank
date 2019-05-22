<?php

function gamingArray($arr) {
    $n = $max = 0;
    for($j = 0; $j <count($arr); $j++){
        if ($arr[$j] > $max){
            $max = $arr[$j];
            $n++;
        }
    }
    return $n % 2 == 0 ? 'ANDY' : 'BOB';
}
