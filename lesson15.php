<?php
//EXERCISE 1
$str = '';

for ($i=1; $i <= 9; $i++) { 
	$str .= $i;
}
echo $str."<br>";

//EXERCISE 2
$str = '';
for ($i=9; $i > 0; $i--) { 
	$str .= $i;
}
echo $str."<br>";

//EXERCISE 3
$str = '-';
for ($i=1; $i < 10; $i++) { 
	$str .= $i.'-';
}
echo $str."<br>";

//EXERCISE 4
$str = '';
for ($i = 1; $i <= 20; $i++) {
    $str = '';
    for ($j = 1; $j <= $i; $j++) {
        $str .= 'x';
    }
    echo $str.'<br>';
}




//EXERCISE 5

$str = '';
for ($i = 1; $i <= 9; $i++) {
	 $str = '';
    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
    echo $str.'<br>';
}

//EXERCISE 6
$str = '';
for ($i=1; $i <= 5; $i++) { 
	$str = '';
	for ($j=0; $j < $i; $j++) { 
		$str .= 'xx';
	}
	echo $str.'<br>';
}
