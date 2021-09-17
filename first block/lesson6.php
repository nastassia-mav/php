<?php
//EXERCISE 1
$a = 10;
$b = 3;
echo $a % $b;

//EXERCISE 5
$total = 0;
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $i) {
    $total += $i * $i;
}
echo sqrt($total);

//EXERCISE 7
$num = sqrt(587);
$arr = [];
$arr['floor'] = floor($num);
$arr['ceil'] = ceil($num);
var_dump($arr);

//EXERCISE 8
$arr = [4, -2, 5, 19, -130, 0, 10];
echo max($arr) . ' ' . min($arr);

//EXERCISE 10
$arr = [];
$num = 10;
while ($num > 0) {
    $num--;
    array_push($arr, mt_rand());
}
var_dump($arr);

//EXERCISE 12
$arr = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < 7; $i++) {
    if($arr[$i] < 0) {
        $arr[$i] = abs($i);
    }
}
var_dump($arr);

//EXERCISE 14
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$total = 0;
$sum = 1;
while ($total < 10) {
    foreach ($arr as $i) {
        $sum ++;
        $total += $i;
    }
}
echo $total;
echo $sum;
