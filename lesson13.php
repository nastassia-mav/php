<?php
//EXERCISE 1
$arr = [1, 2, 3, 4, 5];
$flag = false;
foreach ($arr as $value) {
	if ($value == 5) {
		$flag = true;
		break;
	}
}

if ($flag) {
	echo "есть";
}else{
	echo "нет";
}


//EXERCISE 2
$flag = false;
$int = 31;

for ($i=2; $i <= 30; $i++) {
	if (!($int % $i)) {
		$flag = true;
	}
}

if ($flag) {
	echo "есть";
}else{
	echo "нет";
}


//EXERCISE 3

$flag = false;
$int = 0;

$arr = [1, 2, 3, 4, 5, 6, 7, 7, 8];

foreach ($arr as $value) {
	if($int == $value){
		$flag = true;
	}else{
		$int = $value;
	}
}


if ($flag) {
	echo "есть";
}else{
	echo "нет";
}	
