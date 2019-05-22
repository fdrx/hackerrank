<?php

function plusMinus($arr) {

    $c = count($arr);
    $r = [0, 0, 0];

    if (!empty($arr)) {
        //sort($arr, SORT_NUMERIC);
        for($i=0; $i < $c; $i++) {
            if ($arr[$i] > 0) {
                $r[0]++;
            } elseif ($arr[$i] < 0) {
                $r[1]++;
            } else {
                $r[2]++;
            }
        }
    }

    echo number_format($r[0]/$c, 6) . "\n";
    echo number_format($r[1]/$c, 6) . "\n";
    echo number_format($r[2]/$c, 6);

}