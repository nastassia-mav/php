<?php
//EXERCISE 1
$arr = range(1, 5);
echo array_sum($arr) / count($arr);

//EXERCISE 2
$arr = range(1, 100);
echo array_sum($arr);

//EXERCISE 3
$arr = range(1, 100);
print_r($arr);

//EXERCISE 4
$arr = array_fill(0, 10, 'x');
print_r($arr);

//EXERCISE 5
$arr = range(1, 10);
shuffle($arr);
print_r($arr);

//EXERCISE 6
$int = 5;
$arr = range(1, $int);
echo array_product($arr);

//EXERCISE 7
$int = 2367;
$arr = str_split($int);
echo array_sum($arr);

//EXERCISE 8
$str = 'laksdhg';
echo strrev(ucfirst(strrev($str)));

//EXERCISE 9
$arr = range(1, 5);
$result = array_map('sqrt', $arr);
print_r($result);

//EXERCISE 10
$arr_1 = range(1, 26);
$arr_2 = range('a', 'z');
$new_arr = array_combine($arr_2, $arr_1);
print_r($new_arr);

//EXERCISE 11
$str = '1234567890';
$arr = str_split($str, 2);
echo array_sum($arr);