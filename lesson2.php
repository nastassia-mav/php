<?php

//EXERCISE 1
$a = 3;
echo $a;

//EXERCISE 2
$a = 10;
$b = 2;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;

//EXERCISE 3
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;

//EXERCISE 4
$a = 10;
$b = 2;
$c = 5;
echo $a+$b+$c;

//EXERCISE 5
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result;


//EXERCISE 6
$text = 'Привет, мир!';
echo $text;

//EXERCISE 7
$text1 = 'Привет, ';
$text2 = "Мир!";
echo $text1.$text2;

//EXERCISE 8
$name = 'Анастасия';
echo "Привет, ".$name."!";

//EXERCISE 9
$age = 27;
echo "Мне ".$age." лет!";

//EXERCISE 10
$text = 'abcde';
echo $text[0];
echo $text[2];
echo $text[4];

//EXERCISE 11
$text = 'abcde';
$text[0] = "!";
echo $text;

//EXERCISE 12
$num = '12345';
echo (int) $num[0] + (int) $num[1] + (int) $num[2] + (int) $num[3] + (int) $num[4];

//EXERCISE 13
$hour = 60 * 60;
$day = $hour * 24;
$month = $day * 30;
echo $hour;
echo $day;
echo $month;

//EXERCISE 14
$hour = 12;
$minute = 36;
$second = 54;
echo $hour.':'.$minute.':'.$second;

//EXERCISE 15
$number = 9;
echo $number*$number;

//EXERCISE 16
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;

//EXERCISE 17
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text;

//EXERCISE 18
$var = 10;
$var++;
$var++;
$var--;
echo $var;

//EXERCISE 19
$var = 10;
$var += 7;
$var ++ ;
$var -- ;
$var +=  12;
$var *=  7;
$var -= 15;
echo $var;
