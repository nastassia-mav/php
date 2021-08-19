<?php

//EXERCISE 1
function translit($string){
    $converter = array(
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
    
    'А' => 'A',   'Б' => 'B',   'В' => 'V',
    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
    'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
    'О' => 'O',   'П' => 'P',   'Р' => 'R',
    'С' => 'S',   'Т' => 'T',   'У' => 'U',
    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
    'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
    'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
    'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
);
return strtr($string, $converter);
}

echo translit('Котики');

echo "<br>";

//EXERCISE 2
function getPluralOrSingular($number, $form_one, $form_two_three_four, $form_many){
if ($number == 1) {
    $result = $number.' '.$form_one;
}
if ($number >1 and $number < 5) {
    $result = $number.' '.$form_two_three_four;
}
if ($number > 4) {
    $result = $number.' '.$form_many;
}
return $result;
}

echo getPluralOrSingular(6, 'банан', 'банана', 'бананов'); 



//EXERCISE 3

function happyTicket($string){
$arr = str_split($string, 1);

$sum_first3_dig = 0;
for ($i=0; $i < 3; $i++) { 
    $sum_first3_dig += $arr[$i];
}

$sum_second3_dig = 0;
for ($g=3; $g < 6; $g++) { 
    $sum_second3_dig += $arr[$g];
}

return $sum_first3_dig+$sum_second3_dig;
}

echo happyTicket(555122); 

echo "<br>";

//EXERCISE 4
function getDivisorsSum($number){
$sum = 0;
for ($i=1; $i < $number; $i++) { 
    if ($number % $i === 0) {
        $sum += $i;
    }
}
return $sum;
}


function frendlyNumber($n_one, $n_two)
{
if (getDivisorsSum($n_one) == $n_two and getDivisorsSum($n_two) == $n_one and $n_one !== $n_two and $n_one < $n_two) {
    return "Числа ".$n_one.' и '.$n_two.' являются дружественными.<br>';
}
}
