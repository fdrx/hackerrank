<?php

function rotLeft($a, $d) {

    $c = count($a ?? []);

    if ( empty($a) || count($a) < 2 || $d == 0 || ($d >= $c && $d%c == 0) ) {
        return $a ?? [];
    }

    if ($d > $c) {
        $d = $d%$c;
    }

    $b = [];

    for($i = 0; $i < $c; $i++) {
        $b[$i] = ($i < $c - $d) 
                    ? $a[$i + $d] 
                        : $a[$i - ($c - $d)];
    }

    return $b;

}
