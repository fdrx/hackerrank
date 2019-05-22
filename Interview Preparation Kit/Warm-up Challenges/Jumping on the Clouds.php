<?php

function jumpingOnClouds($c) {

    $jumps = 0;
    
    if (count($c) == 2) {
        $jumps++;
    } elseif (count($c) > 2) {
        
        $i = 0;

        while ($i < count($c)) {
            
            $jumps++;

            if ($i >= count($c) - 3) {
                break;
            } elseif ($c[$i + 2] == 1) {
                $i = $i + 1;
            } else {
                $i = $i + 2;
            }
            
        }
    }
    return $jumps;
}