<?php
//EXERCISE 1
function square($a){
    return $a * $a;
}

//EXERCISE 2
function summ($a, $b){
    return $a + $b;
}

//EXERCISE 3
function aMinusBandDividedC($a, $b, $c){
    return ($a - $b) / $c;
}

//EXERCISE 4
function dayOfTheWeek($a){
    switch ($a) {
        case 1:
            return "Понедельник";
            break;
        case 2:
            return "Вторник";
            break;
        case 3:
            return "Среда";
            break;
        case 4:
            return "Четверг";
            break;
        case 5:
            return "Пятница";
            break;        
        case 6:
            return "Суббота";
            break;
        case 7:
            return "Воскресенье";
            break;
    }
}
