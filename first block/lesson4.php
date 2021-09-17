<?php

//EXERCISE 1
$a = 0;
if($a == 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 2
if($a > 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 3
if($a < 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 4
if($a >= 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 5
if($a <= 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 6
if($a != 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 7
if($a == 'test') {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 8
if($a === '1') {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 9
if($a == null) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 10
if($a !== null) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 11
if($a) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 12
if(!$a) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 13
$var = true;
if($var == true) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 14
$var = true;
if($var !== true) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 15
if($a > 0 && $a < 5) {
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 16
if($a == 0 || $a == 2) {
    $a += 7;
    echo $a;
} else {
    $a /= 10;
    echo $a;
}

//EXERCISE 17
if($a <= 1 && $b >= 3) {
    echo $a + $b;
} else {
    echo $a - $b;
}

//EXERCISE 18
if(($a > 2 && $a < 11) || ($b >= 6 && $b < 14)) { 
    echo 'Верно';
} else {
    echo 'Неверно';
}

//EXERCISE 19
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

//EXERCISE 20
$day;
if($day < 11) {
    echo 'Первая декада';
} elseif($day < 21) {
    echo 'Вторая декада';
} else {
    echo 'Третья декада';
}

//EXERCISE 21
$month;
if($month == 12 || $month <= 2) {
    echo 'Зима';
} elseif($month <= 5) {
    echo 'Весна';
} elseif($month <= 8) {
    echo 'Лето';
} else {
    echo 'Осень';
}

//EXERCISE 22
$year;
if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo 'Високосный';
} else {
    echo 'Не високосный';
}
