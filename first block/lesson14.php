<?php

//EXERCISE 1
function compareNumbers($a, $b) 
{
    if (is_int($a) && is_int($b)){
      return $a == $b;
    } else {
      return 'Not a number';
    }
}
echo compareNumbers(5, 5);

//EXERCISE 2
function moreThanTen($a, $b) 
{
    if (is_int($a) && is_int($b)){
      return $a + $b > 10;
    } else {
      return 'Not a number';
    }
}
echo moreThanTen(6, 5);

//EXERCISE 3
function isNegative($a) 
{
    if (is_int($a)){
      return $a > 0;
    } else {
      return 'Not a number';
    }
}
echo isNegative(6);
