<?php

function birthdayCakeCandles($ar) {

    $str = '';

    if (!empty($ar)) {
        rsort($ar);
        $max = reset($ar);
        $s = 0;
        for($i=0;$i<count($ar);$i++) {
            if ($ar[$i] != $max) {
                break;
            }
            $s++;
        }
        return $s;
    }

    return 0;
}