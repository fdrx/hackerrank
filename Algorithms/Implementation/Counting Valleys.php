<?php

function countingValleys($n, $s) {
    
    $valleys = 0;

    if ($n >= 2) {
        
        $A = str_split($s);
        $S = 0;
        
        foreach($A as $k => $v) {
            $isUp = ($S >= 0);
            if($v == 'U') {
               $S++; 
            } elseif ($v == 'D') {
               $S--; 
            }
            if($isUp && $S < 0) {
                $valleys++;
            }
        }
        
    }
    
    return $valleys;

}
