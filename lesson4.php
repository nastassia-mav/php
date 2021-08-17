<?php

//EXERCIZE 1
$a=0;
if($a == 0){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 2
if($a > 0){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 3
if($a < 0){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 4
if($a >= 0){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 5
if($a <= 0){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 6
if($a != 0){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 7
if($a == 'test'){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 8
if($a === '1'){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 9
if($a == null){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 10
if($a !== null){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 11
if($a){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 12
if(!$a){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 13
$var = true;
if($var == true){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 14
$var = true;
if($var !== true){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 15
if($a > 0 and $a < 5){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 16
if($a == 0 or $a == 2){
    $a += 7;
    echo $a;
}else{
    $a /= 10;
    echo $a;
}

//EXERCIZE 17
if($a <= 1 and $b >= 3){
    echo $a + $b;
}else{
    echo $a - $b;
}

//EXERCIZE 18
if(($a > 2 and $a < 11)or($b >= 6 and $b < 14)){
    echo 'Верно';
}else{
    echo 'Неверно';
}

//EXERCIZE 19
switch ($num) {
    case '1':
        $result = 'зима';
    break;
    case '2':
        $result = 'лето';
    break;
    case '3':
        $result = 'осень';
    break;
    case '4':
        $result = 'весна';
    break;
}

//EXERCIZE 20
$day;
if($day < 11){
    echo 'Первая декада';
}else if($day < 21){
    echo 'Вторая декада';
}else{
    echo 'Третья декада';
}

//EXERCIZE 21
$month;
if($month == 12 or $month <= 2){
    echo 'Зима';
}else if($month <= 5){
    echo 'Весна';
}else if($month <= 8){
    echo 'Лето';
}else{
    echo 'Осень';
}

//EXERCIZE 22
$year;
if(($year % 4 == 0 and $year % 100 != 0) or ($year % 400 == 0)){
    echo 'Високосный';
}else{
    echo 'Не високосный';
}