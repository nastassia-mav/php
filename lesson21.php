<?php
//EXERCISE 1
for ($i = 1; $i < 101; $i++) {
    echo $i . '<br>';
}
echo '<hr><br>';

//EXERCISE 2
for ($i = 1; $i < 101; $i++) {
    if (($i % 2) == 0) {
        echo $i . '<br>';
    }
}
echo '<hr><br>';

//EXERCISE 3
for ($i = 1, $j = 0; $i < 101; $i++) {
    $j += $i;
}
echo $j;
echo '<hr><br>';

//EXERCISE 4
for ($i = 1, $j = 0; $i < 16; $i++) {
    $j += $i * $i;
}
echo $j;
echo '<hr><br>';


//EXERCISE 5
for ($i = 1, $j = 0; $i < 16; $i++) {
    $j += sqrt($i);
}
echo round($j, 2);
echo '<hr><br>';


//EXERCISE 6
for ($i = 1, $j = 0; $i <= 100; $i++) {
    if (($i % 7) == 0) {
        $j += $i;
    }
}
echo $j;
echo '<hr><br>';


//EXERCISE 7
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = 'x';
}
var_dump($arr);
echo '<hr><br>';


//EXERCISE 8
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i;
}
print_r($arr);
echo '<hr><br>';


//EXERCISE 9
$arr = [];
for ($i = 10; $i > 0; $i--) {
    $arr[] = $i;
}
print_r($arr);
echo '<hr><br>';


//EXERCISE 10
$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = mt_rand(1, 10);
}
var_dump($arr);
echo '<hr><br>';


//EXERCISE 11
$str = '';
for ($i = 1; $i <= 6; $i++) {
    $str .= rand(1, 9);
}
echo $str;
echo '<hr><br>';


//EXERCISE 12
$arr = range(1, 6);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem;
}
echo $sum;
echo '<hr><br>';


//EXERCISE 13
$arr = range(1, 6);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem * $elem;
}
echo $sum;
echo '<hr><br>';


//EXERCISE 14
$arr = range(1, 6);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem * $elem;
}
echo floor(sqrt($sum));
echo '<hr><br>';


//EXERCISE 15
$arr = range(7, 12);
$sum = 0;
foreach ($arr as $elem) {
    if ($elem > 0 and $elem < 10) {
        $sum += $elem;
    }
}
echo $sum;
echo '<hr><br>';


//EXERCISE 16
$arr = [1, 2, 3, 3, 3, 4, 6, 9, 11];
$flag = false;
for ($i = 0, $j = 1, $k = 2; $arr[$k] <= count($arr); $i++, $j++, $k++) {
    if ($arr[$i] == $arr[$j] and $arr[$i] == $arr[$k]) {
        $flag = true;
    }
}

if ($flag === true) {
    echo 'Есть';
} else {
    echo 'Нет';
}
echo '<hr><br>';


//EXERCISE 17
$str = '';
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
}
echo $str;
echo '<hr><br>';


//EXERCISE 18
$arr = [
    0 => ['name' => 'Коля', 'salary' => 300],
    1 => ['name' => 'Вася', 'salary' => 400],
    2 => ['name' => 'Петя', 'salary' => 500],
];

foreach ($arr as $elem) {
    echo $elem['name'] . '-' . $elem['salary'] . '<br>';
}
echo '<hr><br>';


//EXERCISE 19
$arr = [];
for ($i = 0; $i <= 9; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $arr[$i][] = mt_rand(1, 10);
    }
}
var_dump($arr);
echo '<hr><br>';


//EXERCISE 20
$str = 'hello';
$first = substr($str, 0, 1);
$str = strtoupper($first) . substr($str, 1, strlen($str));
echo $str;
echo '<hr><br>';


//EXERCISE 21
$str = 'hello!';
$arr = array_reverse(str_split($str));
$str = implode($arr);
echo 'first: ' . $str, '<br>';


$str1 = 'hello!';
$str2 = '';
$str_len = strlen($str1);

for ($i = $str_len; $i > 0; $i--) {
    $str2 .= substr($str1, $i - 1, 1);
}
echo 'second: ' . $str2, '<br>';


$str1 = 'hello!';
$str2 = '';
$str_len = strlen($str1);

for ($i = $str_len; $i > 0; $i--) {
    $str2 .= $str1[$i - 1];
}
echo 'third: ' . $str2, '<br>';
echo '<hr><br>';


//EXERCISE 22
$str1 = 'hello!';

$arr = str_split($str1);
$i = 0;
foreach ($arr as $elem) {
    $i++;
}
echo strlen($str1) . ' - ' . $i . '<br>';

$str1 = 'hello!';
$str_len = count(str_split($str1));
echo $str_len;
echo '<hr><br>';


//EXERCISE 23
$str = 'QwErTy';
$str1 = '';
$arr = str_split($str);
foreach ($arr as $elem) {
    if (ord($elem) >= 97 and ord($elem) <= 122) {
        $str1 .= strtoupper($elem);
    } else {
        $str1 .= strtolower($elem);
    }
}
echo 'было - ' . $str . ', <br> стало - ' . $str1;
echo '<hr><br>';


//EXERCISE 24
$str = 'var_text_hello';
$str1 = '';
$arr = explode('_', $str);
foreach ($arr as $elem) {
    if ($elem == $arr[0]) {
        $str1 .= $elem;
    } else {
        $str1 .= ucfirst($elem);
    }
}
echo 'было - ' . $str . ', <br> стало - ' . $str1;
echo '<hr><br>';


//EXERCISE 25
for ($i = 1; $i <= 9; $i++) {
    echo str_repeat($i, $i), '<br>';
}
echo '<hr><br>';


//EXERCISE 26
$str = 'xxxxxxxx';
for ($i = 1; $i <= strlen($str); $i++) {
    echo substr($str, 0, $i) . " - $i ряд", '<br>';
}
echo '<hr><br>';


//EXERCISE 27
$arr = [1, 3, 2, 4];
$arr1 = [];
foreach ($arr as $item) {
    for ($i = 1; $i <= $item; $i++) {
        $arr1[] = $item;
    }
}
print_r($arr1);
echo '<hr><br>';


//EXERCISE 28
$arr = [5, 2, 7, 4, 8, 6];
print_r($arr);
echo '<br>';
$new_arr = [];
for ($i = 0; $i < count($arr); $i += 2) {
    $new_arr[$arr[$i]] = $arr[$i + 1];
}
print_r($new_arr);
echo '<hr><br>';


//EXERCISE 29
$str = '987654321';
echo $str, '<br>';
$new_str = '';
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] % 2 != 0) {
        $new_str .= $str[$i];
    }
}
echo $new_str;
echo '<hr><br>';


//EXERCISE 30
$str = '12345678'; 
for ($i = 0, $j = 1; $i < strlen($str); $i += 2, $j += 2) {
    $a = $str[$i];
    $b = $str[$j];
    $str[$i] = $b;
    $str[$j] = $a;
}
echo $str, '<br>';

$str = '12345678';
$newStr = array_reverse(str_split(strrev($str), 2));
echo implode('', $newStr);
echo '<hr><br>';


//EXERCISE 31
$arr = [1, 2, 3, 3, 4, 4, 5];
function get_arr_unique($arr)
{
    $new_arr = [];
    foreach ($arr as $elem) {
        if (in_array($elem, $new_arr) == false) {
            $new_arr[] = $elem;
        }
    }
    return $new_arr;
}

print_r(get_arr_unique($arr));
echo '<hr><br>';


//EXERCISE 32
$arr = [1, 2, 3, 3, 4, 4, 5];
function get_un_unique($arr)
{
    $new_arr = [];
    for ($i = 0; $i < count($arr); $i++) {
        $elem = $arr[$i];
        unset($arr[$i]);
        if (in_array($elem, $arr)) {
            $new_arr[] = $elem;
        }
        $arr[$i] = $elem;
    }
    return $new_arr;
}

var_dump(get_un_unique($arr));
echo '<hr><br>';


//EXERCISE 33
$elem = 11;
$flag = false;
for ($i = 2; $i < $elem; $i++) {
    if ($elem % $i == 0) {
        $flag = true;
        break;
    }
}

if ($flag == false) {
    echo 'Простое число';
} else {
    echo 'Сложное число';
}
echo '<hr><br>';


//EXERCISE 34
$arr = ['http://google.com', 'https://vk.com', 'https://youtube.com'];
$new_arr = [];
foreach ($arr as $elem) {
    if (strpos($elem, 'http://') !== false) {
        $new_arr[] = $elem;
    }
}
var_dump($new_arr);
?>
