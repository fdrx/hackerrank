<?php

function getTotalX($a, $b) {

    $n = end($a);
    $m = reset($b);
    $r = [];

    for($i = $n; $i <= $m; $i++) {

        $is1 = true;
        $is2 = true;

        foreach($a as $k => $v) {
            if ( $i % $v != 0) {
                $is1 = false;
                break;
            }
        }

        foreach($b as $k => $v) {
            if ( $v % $i != 0) {
                $is2 = false;
                break;
            }
        }

        if($is1 && $is2) {
            $r[] = $i;
        }

    }

    return count($r);

}
