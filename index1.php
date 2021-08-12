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

function booleanValue($bool)
{
    if ($bool) {
        echo "Истина";
    } else {
        echo "Ложь";
    }
}

booleanValue(false);