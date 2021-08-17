<?php

//EXERCISE 1
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach($arr as $elem){
    echo $elem.'<br>';
}

//EXERCISE 2
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach($arr as $elem){
    $result += $elem;
}
echo $result;

//EXERCISE 3
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach($arr as $elem){
    $result += $elem*$elem;
}
echo $result;

//EXERCISE 4
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach($arr as $key=>$elem){
    echo $key.'-'.$elem.'<br>';
}

//EXERCISE 5
$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
foreach($arr as $key=>$elem){
    echo $key.' - зарплата '.$elem.' долларов. <br>';
}

//EXERCISE 6
$res = 1;
while($res <= 100){
    echo $res.'<br>';
    $res++;
}

for ($res=1; $res<=100; $res++){
    echo $res.'<br>';
}

//EXERCISE 7
$res = 11;
while($res <= 33){
    echo $res.'<br>';
    $res++;
}

for ($res=11; $res<=33; $res++){
    echo $res.'<br>';
}

//EXERCISE 8
$res = 11;
while($res <= 33){
    echo $res.'<br>';
    $res++;
}

for ($res=11; $res<=33; $res++){
    echo $res.'<br>';
}

//EXERCISE 10
$res = [2, 5, 9, 15, 0, 4];
foreach($res as $items){
    if($items >= 3 and $items <= 10){
        echo $items.'<br>';
    }
}

//EXERCISE 13
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $items){
    if($items[0] == '1' or $items[0] == '2' or $items[0] == '5'){
        echo $items.'<br>';
    }
}

//EXERCISE 17
$arr = [];
for ($i=1; $i<=100; $i++){
    array_push($arr, $i);
}
var_dump($arr);

//EXERCISE 19
$num = 1000;
$total = 0;
while($num >= 50){
    $total++;
    $num /= 2;
}
echo $num.' '.$total;
