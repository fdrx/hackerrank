<?php

function kangaroo($x1, $v1, $x2, $v2) {

    if ($v1 == $v2) {

        return $x1 == $x2 ? 'YES' : 'NO';
        
    } elseif ($v1 > $v2) {

        if ($x1 < $x2) {
            
            $n = floor( ($x2 - $x1) / ($v1 - $v2));
            
            for ($j = 1; $j <= $n; $j++) {
                if (($x1 + $j * $v1) == ($x2 + $j * $v2)) {
                    return "YES";
                }
            }
            
            return "NO";
            
        } else {
            return "NO";
        }
        
    } elseif ($v1 < $v2) {

        if ($x2 > $x1) {
            
            $n = floor( ($x1 - $x2) / ($v2 - $v1));
            
            for ($j = 1; $j <= $n; $j++) {
                if (($x1 + $j * $v1) == ($x2 + $j * $v2)) {
                    return "YES";
                }
            }
            
            return "NO";
            
        } else {
            return "NO";
        }
        
    }
}