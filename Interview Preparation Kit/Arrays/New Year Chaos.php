<?php

function minimumBribes($q) {

    $nb = 0;

    for($i = 0; $i < count($q); $i++) {

        $diff = $q[$i] - $i - 1;

        if ($diff > 2) {
            return 'Too chaotic';
        }

        for ($j = max(0, $q[$i] - 2); $j < $i; $j++) {
            if ($q[$j] > $q[$i]) {
                $nb++;
            }
        }

    }

    return $nb;

}