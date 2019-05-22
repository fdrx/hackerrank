<?php

function miniMaxSum($arr) {

    $min = 0;
    $max = 0;
    
    if (!empty($arr)) {

        $count = count($arr);
        $limit = ($count < 4) ? $count : 4;
        
        rsort($arr, SORT_NUMERIC);
        
        for($i = 0; $i < $limit; $i++) {
            $max += $arr[$i];
        }
        
        $arr = array_reverse($arr);
        for($i = 0; $i < $limit; $i++) {
            $min += $arr[$i];
        }

    }
    
    echo $min . ' ' . $max;

}
