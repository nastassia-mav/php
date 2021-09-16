<?php

//EXERCISE 1
function cut(string $string, string $howFirstSymbols = '10'): string
{
    $string = mb_substr($string, 0, $howFirstSymbols, 'UTF-8');
    return $string;
}
echo cut('Длинная строка', 5);

//EXERCISE 2
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function showArray(array $arr): array
{
    $elem = array_shift($arr);
    echo $elem;
    if (!empty($arr)) {
        showArray($arr);
    }
}
showArray($arr);

//EXERCISE 3
function lowNum(array $arr): int
{
    $result = array_sum($arr);
    if ($result > 9) {
        $result = lowNum($result);
    }
    return $result;
}
