<?php
//EXERCISE 1
$arr = array();
for ($i=0; $i < 10; $i++) {
	for ($j=0; $j <= $i; $j++) {
		$arr[$i] .= 'x';
	}
}



//EXERCISE 2
$arr = array();
for ($i=0; $i < 10; $i++) {
	for ($j=0; $j < $i; $j++) { 
		$arr[$i] .= $i;
	}
}
echo "<pre>";
var_dump($arr);
echo "<pre>";

//EXERCISE 3
function arrayFill($value, $count){
	for ($i=0; $i <= $count; $i++) { 
		$arr[] = $value;
	}
	return $arr;
}
print_r(arrayFill('X', 10));

//EXERCISE 4
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$int = 0;
for ($i=0; $i < count($arr); $i++) {
	if ($int > 10) {
		echo $i;
		break;
	}else{
		$int += $arr[$i];
	}
}
echo "<br>";
//EXERCISE 5
$arr = [[1, 2, 3], [4, 5], [6]];

$count = 0;
foreach ($arr as $value) {
	for ($i=0; $i < count($value); $i++) {
		$count += $value[$i];
	}
}
echo $count;
echo "<br>";

//EXERCISE 6
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];

$count = 0;
foreach ($arr as $value) {
	foreach ($value as $sub_value) {
			foreach ($sub_value as $elem) {
			$count += $elem;
		}
	}
}

echo $count;
echo "<br>";

//EXERCISE 7
$arr = array();
$count = 1;
for ($i=0; $i <= 2; $i++) {
	$arr[$i] = $i;
	$arr[$i] = [];
	for ($j=0; $j < 3; $j++) { 
		$arr[$i][] = $count ;
		$count++;
	}
}

var_dump($arr);