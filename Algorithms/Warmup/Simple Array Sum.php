<?php

function simpleArraySum($ar) {

    $s = 0;
    
    if (!empty($ar)) {
        for($i = 0; $i < count($ar); $i++) {
            $s += $ar[$i];
        }
    }

    return $s;

}