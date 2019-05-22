<?php

function twoStrings($s1, $s2) {

    if (strlen($s1) == 0 || strlen($s2) == 0) {
        return 'NO';
    }

    $S = strlen($s1) <= strlen($s2) ? $s2 : $s1;
    $s = strlen($s1) <= strlen($s2) ? $s1 : $s2;
    $r = implode('',array_unique(str_split($s)));
    for($i=0; $i<strlen($r); $i++) {
        if (strpos($S, $r[$i]) !== FALSE) {
            return 'YES';
        }
    }
    return 'NO';
}
