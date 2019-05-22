<?php

function repeatedString($s, $n) {

    $l = strlen($s);

    if (!empty($l)) {
        
        $nb = substr_count($s, 'a');
        
        if (empty($nb)) {
            return 0;
        } elseif ($l == 1) {
            return $n;
        } elseif ($n <= $l) {
            return substr_count( substr($s, 0, $n), 'a' );
        } else {

            $r = floor($n / $l);
            $q = $n % $l;
            
            if ($q > 0) {
                $m = substr_count( substr($s, 0, $q), 'a' );
            }
            return (($r * $nb) + $m);
        }
        
    }
    
    return 0;
}