<?php

function staircase($n) {

    if ($n > 0) {
        for($i = 0; $i < $n; $i++) {
            for($j = 0; $j < $n; $j++) {
                if ($n - 1 - $j > $i) {
                    echo " ";
                } else {
                    echo "#";
                }
                if ($j == $n - 1) {
                    echo "\n";
                }
            }
        }
    }

}