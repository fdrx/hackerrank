<?php

function sockMerchant($n, $ar) {
    
    $nb = 0;

    if ($n >= 2) {
        $ar = array_count_values($ar);
        print_r($ar);
        foreach($ar as $k => $v) {
            if ($v > 1) {
                $nb += floor($v / 2);
            }
        }
    }

    return $nb;
}