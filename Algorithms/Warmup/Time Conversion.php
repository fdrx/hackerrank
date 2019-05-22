<?php

function timeConversion($s) {
    $pm = (substr($s, -2) == 'PM');
    $h = substr($s, 0, 2);
    if($pm) {
        if ($h < 12) {
            $h = $h + 12;
        }
    } else {
        if ($h == 12) {
            $h = '00';
        }
    }
    return $h . substr($s, 2, 6);
}