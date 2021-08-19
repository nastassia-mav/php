<?php
//EXERCISE 1
$str = 'php';
echo strtoupper($str);

//EXERCISE 6
$str = 'LONDON';
echo  ucfirst(strtolower($str));

//EXERCISE 8
$password = 'LONDON';
if(strlen($password) < 10 and strlen($password) > 5){
    echo 'Пароль подходит';
}else{
    echo 'Пароль не подходит';
}

//EXERCISE 15
$password = 'LONDON';
if(strlen($password) > 5){
    echo substr($password, 1, 5).'...';
}else{
    echo $password;
}

//EXERCISE 18
$str = '1a2b3c4b5d6e7f8g9h0';
for ($i=0; $i < 10; $i++) { 
	$str = str_replace($i, '', $str);
}

//EXERCISE 19
$str = 'aaabbbccc';
echo strtr($str, ['a'=>'1', 'b'=>'2', 'c'=>'3']); 
$str = 'aaabbbccc';
echo strtr($str, 'abc', '123');

//EXERCISE 20
$str = 'afgdabadccbafsa';
echo substr_replace($str, '!!!', 3, 5);

//EXERCISE 21
echo strpos('abc abc abc', 'c');

//EXERCISE 22
echo strrpos('abc abc abc', 'b');

//EXERCISE 23
echo strpos('abc abc abc', 'b', 3);

//EXERCISE 24
echo strpos('aaa aaa aaa aaa aaa', ' ', 4);

//EXERCISE 25
$str = 'sdfsf..sfdfs';
if (strpos($str, '..') !== false) {
	echo "Есть";
}else{
	echo "Нет";
}

//EXERCISE 27
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);

//EXERCISE 28
$arr = ['html', 'css', 'php'];
echo $str = implode(', ', $arr);

//EXERCISE 29
$str = '2013-12-31';
$arr = explode('-', $str);
echo $str = $arr[0].'.'.$arr[1].'.'.$arr[2];

//EXERCISE 30
$str = '1234567890';
$arr = str_split($str, 2);
var_dump($arr);

//EXERCISE 31
$str = '1234567890';
$arr = str_split($str);
var_dump($arr);

//EXERCISE 32
$str = '1234567890';
$arr = str_split($str, 2);
echo $str = implode('-', $arr);

//EXERCISE 33
$str = ' 1234567890 ';
echo trim($str);

//EXERCISE 34
$str = '/php/';
echo trim($str, '/');

//EXERCISE 35
$str = 'слова слова слова.';
echo rtrim($str, '.').'.';

//EXERCISE 43
$str = 'html, <b>php</b>, js';
echo strip_tags($str);

//EXERCISE 44
$str = 'html, <b>php</b>, js';
echo strip_tags($str, '<b><i>');

//EXERCISE 45
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);

//EXERCISE 52
$str = 'ab--cd--ef';
echo strstr($str, '-');

//EXERCISE 53
$str = 'var_test_text';
$arr = explode('_', $str);
$str = implode(' ', $arr);
$str = ucwords($str);
$str = lcfirst($str);
echo $str = str_replace(' ', '', $str);

//EXERCISE 56
$arr = [4234, 2342, 423, 2344552, 76585, 678845468];
foreach ($arr as $value) {
	if (strpos($value, '3') !== false) {
		echo $value."<br>";
	}
}
