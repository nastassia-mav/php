<?php 

//EXERCISE 1
$arr = ['123', 'gddf', 'dgg', '33', 'ggd', 'dg', 'dg'];
echo count($arr);

//EXERCISE 2
$arr = ['123', 'dkk', 'вап', '33', 'ggddd', 'dgooow', 'dgvd'];
echo $arr[count($arr)-1];

//EXERCISE 3
$arr = ['456', '567', '46897', '79789', '645', '221', '3'];
if (in_array('3', $arr) == true) {
   echo "Есть";
} else {
    echo "Нету";
}


//EXERCISE 4
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);

//EXERCISE 5
$arr = [1, 2, 3, 4, 5];
echo array_product($arr);

//EXERCISE 6
$arr = [1, 2, 3, 4, 5];
$arr_sum =  array_sum($arr);
$arr_count = count($arr);
echo $arr_sum/$arr_count;

//EXERCISE 7
$arr = range(1, 100);
var_dump($arr);

//EXERCISE 8
$arr = range('a', 'z');
var_dump($arr);

//EXERCISE 9
$arr = range(1, 9);
$str = implode('-', $arr);
echo $str;

//EXERCISE 10
$arr = range(1, 100);
echo array_sum($arr);

//EXERCISE 11
$arr = range(1, 10);
echo array_sum($arr);

//EXERCISE 12
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$arr = array_merge($arr1, $arr2);
var_dump($arr);

//EXERCISE 13
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
var_dump($result);

//EXERCISE 14
$arr = [1, 2, 3, 4, 5];
$splice_arr = array_splice($arr, 1, 2);
var_dump($arr);

//EXERCISE 15
$arr = [1, 2, 3, 4, 5];
$splice_arr = array_splice($arr, 1, 3);
var_dump($splice_arr);

//EXERCISE 16
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, [a, b, c]);
var_dump($arr);

//EXERCISE 17
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, [a, b]);
array_splice($arr, 6, 0, [c]);
array_splice($arr, 8, 0, [e]);
var_dump($arr);

//EXERCISE 18
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);

//EXERCISE 19
$arr = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$arr3 = array_combine($arr, $arr2);

//EXERCISE 20
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$result = array_flip($arr);
var_dump($result);

//EXERCISE 21
$arr = [1, 2, 3, 4, 5];
$result = array_reverse($arr);
var_dump($result);

//EXERCISE 22
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$result = array_search('-', $arr);
var_dump($result);

//EXERCISE 23
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr);
$result = array_splice($arr, $position, $position);
var_dump($arr);

//EXERCISE 24
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, ['0' => '!', '3' => '!!']);
var_dump($result);


//EXERCISE 25
$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
sort($arr);
var_dump($arr);

//EXERCISE 26
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_rand($arr);

//EXERCISE 27
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_rand($arr);
echo $arr[array_rand($arr)];

//EXERCISE 28
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
shuffle($arr);
var_dump($arr);

//EXERCISE 29
$arr = range(1, 25);
shuffle($arr);
var_dump($arr);

//EXERCISE 30
$arr = range(a, z);
shuffle($arr);
var_dump($arr);

//EXERCISE 31
$arr = range(a, f);
shuffle($arr);
$str = implode('', $arr);
echo $str;

//EXERCISE 32
$arr = ['a', 'b', 'c', 'b', 'a'];
$result = array_unique($arr);
var_dump($result);

//EXERCISE 33
$arr = [1, 2, 3, 4, 5];
$result = array_shift($arr);
$result2 = array_pop($arr);
var_dump($result);
var_dump($result2);

//EXERCISE 34
$arr = [1, 2, 3, 4, 5];
array_unshift($arr, '0');
array_push($arr, '6');

//EXERCISE 35
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$str = '';
while (count($arr) > 0) {
    $str .= array_shift($arr);
    $str .= array_pop($arr);
}
echo $str;

//EXERCISE 36
$arr = ['a', 'b', 'c'];
$arr = array_pad($arr, 6, '-');
var_dump($arr);

//EXERCISE 37
$arr = array_fill(0, 10, 'x');
var_dump($arr);


//EXERCISE 38
$arr = range(1, 20);
var_dump(array_chunk($arr, 4));

//EXERCISE 39
$arr = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_count_values($arr));

//EXERCISE 40
$arr = [1, 2, 3, 4, 5];
$result = array_map('sqrt', $arr);
var_dump($result);

//EXERCISE 41
$arr = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags', $arr);
var_dump($result);


//EXERCISE 42
$arr = [' a ', ' b ', ' с '];
$result = array_map('trim', $arr);
var_dump($result);


//EXERCISE 43
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result = array_intersect($arr1, $arr2);
var_dump($result);

//EXERCISE 44
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result = array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1)); // 


//EXERCISE 45
$str = '1234567890';
$arr = str_split($str);
var_dump(array_sum($arr));

//EXERCISE 46
$arr3 = array_combine(range(a, z), range(1, 26));
var_dump($arr3);

//EXERCISE 47
$arr =  range(1, 9);
var_dump(array_chunk($arr, 3));

//EXERCISE 48
$arr = [1, 2, 4, 5, 5];
$arr = array_unique($arr);
arsort($arr);
$result = array_splice($arr, 1, 1);
echo $result[0];
