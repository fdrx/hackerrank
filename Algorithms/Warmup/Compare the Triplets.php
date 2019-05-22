<?php

function compareTriplets($a, $b) {

    $c = [0, 0];

    for($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            $c[0]++;
        }
        if ($a[$i] < $b[$i]) {
            $c[1]++;
        }
    }

    return $c;

}
