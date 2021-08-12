<?php

function stepen($number, $stepen)
{
    $newNum = 1;
    for ($i = 0; $i < $stepen; $i++) {
        $newNum = $newNum * $number;
    }

    return $newNum;
}

echo stepen(5, 2);