<?php

//EXERCISE 1
function cut($string, $howFirstSymbols = '10')
{
    $string = mbSubstr($string, 0, $howFirstSymbols, 'UTF-8');
    return $string;
}

echo cut('Длинная строка', 5);

//EXERCISE 2
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function showArray($arr)
{
    $elem = arrayShift($arr);
    echo $elem;
    if (!empty($arr)) {
        showArray($arr);
    }
}
showArray($arr);

//EXERCISE 3
function lowNum($arr)
{
    $result = arraySum($arr);
    if ($result > 9) {
        $result = lowNum($result);
    }
    return $result;
}
