<?php
//EXERCISE 3
function lowNum($num)
{
    $result = array_sum($arr);
    if ($resullt > 9) {
        $result = lowNum($result);
    }
    return $result;
}

//EXERCISE 1
function cut($string, $how_first_symbols = '10'){
$string = mb_substr($string, 0, $how_first_symbols, 'UTF-8');
return $string;
}

echo cut('Длинная строка', 5);

//EXERCISE 2

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function show_array($arr){

$elem = array_shift($arr);
echo $elem;

if(!empty($arr)) {
    show_array($arr);
}
}

show_array($arr); // Выведет 123456789