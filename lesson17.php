<?php
//EXERCISE 1
function isNumberInRange($number){
	return ($number > 0 and $number < 10);
}
echo isNumberInRange(5);

//EXERCISE 2
$arr = [1, 2, 3, 44, 51, 6, 7, 22];
function newArrayInRange($array){
	foreach ($array as $value) {
		if (isNumberInRange($value)) {
			$new_arr[] = $value;
		}
	}
	var_dump($new_arr);
}
newArrayInRange($arr);
echo '<br>';

//EXERCISE 3
function getDigitsSum($number){
	$arr = str_split($number, 1);
	$sum = 0;
    foreach ($arr as $elem) {
        $sum += intval($elem);
    }
    return $sum;
}

//EXERCISE 4
function getSumInYear(){
	for ($i = 0; $i <= 2021; $i++) {
		if (getDigitsSum($i) == 13) {
			echo $i . '<br>';
		}
	}
}

//EXERCISE 5
function isEven($number){
	if ($number % 2) {
		return false;
	}
	return true;
}
echo isEven(30);


//EXERCISE 6
$arr = [1, 2, 3, 44, 51, 6, 7, 22];
function evenNumberInArray($arr){
	foreach ($arr as $value) {
		if (isEven($value)) {
			$new_arr[] = $value;
		}
	}
	return $new_arr;
}
var_dump(evenNumberInArray($arr));

//EXERCISE 7
function getDivisors($number){
	for ($i = 1; $i <= $number; $i++) { 
		if ($number % $i === 0) {
			$new_arr[] = $i;
		}
	}
	return $new_arr;
}
echo '<pre>';
var_dump(getDivisors(40));
echo '</pre>';

//EXERCISE 8
function getCommonDivisors($number1, $number2){
	$result = array_intersect(getDivisors($number1), getDivisors($number2));
	var_dump($result);
}

getCommonDivisors(100, 200);
