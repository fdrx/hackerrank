<?php

function hourglassSum($arr) {

    $max_sum = PHP_INT_MIN;

    for($j=0; $j < 4; $j++) {

        for($i=0; $i < 4; $i++) {

            $sum = 0;

            $sum += $arr[$j][$i] + $arr[$j][$i+1] + $arr[$j][$i+2];
            $sum += $arr[$j+1][$i+1];
            $sum += $arr[$j+2][$i] + $arr[$j+2][$i+1] + $arr[$j+2][$i+2];

            $max_sum = max($max_sum, $sum); 
        }
    }

    return $max_sum;

}