<?php

function minimumSwaps($arr) {

    if (!empty($arr)) {

        $sum = 0;

        for($i = 0; $i < count($arr); $i++) {

            while($arr[$i] != ($i + 1)) {

                if ($arr[$i] != $i + 1) {

                    if (isset($arr[$arr[$i] - 1]) && $arr[$arr[$i] - 1] == ($i + 1)) {
                        $arr[$arr[$i] - 1] = $arr[$i];
                        $arr[$i] = $i + 1;
                        $sum++;
                    } else {
                        $temp = $arr[$arr[$i] - 1];
                        $arr[$arr[$i] - 1] = $arr[$i];
                        $arr[$i] = $temp;
                        $sum++;
                    }
                }

            }

        }

        return $sum;
    }

    return 0;

}