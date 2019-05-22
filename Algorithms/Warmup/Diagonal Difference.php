<?php

function diagonalDifference($arr) {

    $d1 = 0;
    $d2 = 0;

    if (!empty($arr)) {
        for ($i = 0; $i < count($arr); $i++) {
            $d1 += $arr[$i][$i] ?? 0;
            $d2 += $arr[$i][count($arr) - 1 - $i] ?? 0;
        }
    }

    return abs($d1 - $d2);

}