<?php

function aVeryBigSum($ar) {

    $s = 0;
    for ($i=0; $i<count($ar); $i++) {
        $s += $ar[$i];
    }
    return $s;
}