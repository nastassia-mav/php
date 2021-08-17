<?php

//EXERCIZE 1
$arr = ['a','b','c'];
var_dump($arr);

//EXERCIZE 2
echo $arr[0].$arr[1].$arr[2];

//EXERCIZE 3
$arr = ['a','b','c','d'];
echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3];

//EXERCIZE 4
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;

//EXERCIZE 5
$arr[0]=1;
$arr[1]=2;
$arr[2]=3;
$arr[3]=4;
$arr[5]=5;
var_dump($arr);

//EXERCIZE 6
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'];

//EXERCIZE 7
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo array_sum($arr);

//EXERCIZE 8
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr['Петя']+$arr['Коля'];

//EXERCIZE 9
$arr=[1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Птяница', 6=>'Суббота', 7=>'Воскресенье'];
echo $arr[2];

//EXERCIZE 10
$day = 2;
echo $arr[$day];

//EXERCIZE 11
$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr['cms'][0].$arr['cms'][2].$arr['colors']['green'].$arr['colors']['red'];

//EXERCIZE 12
$arr = [
	'ru'=>[1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Птяница', 6=>'Суббота', 7=>'Воскресенье'],
	'en'=>[1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 7=>'Sunday'],
];
echo $arr['ru'][1].$arr['en'][3];

//EXERCIZE 13
$lang = 'ru';
$day = 2;
echo $arr[$lang][$day];