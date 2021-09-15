<?php
//EXERCISE 1
function getSquare($a) {
    return $a * $a;
}

//EXERCISE 2
function getSumm($a, $b) {
    return $a + $b;
}

//EXERCISE 3
function getAMinusBAndDividedC($a, $b, $c) {
    return ($a - $b) / $c;
}

//EXERCISE 4
function getDayOfTheWeek($a) {
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
        default:
            echo "Введите число от 1 до 8";
    }
}
