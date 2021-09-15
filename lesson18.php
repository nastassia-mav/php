<?php

//EXERCISE 1
function transliteration($string)
{
    $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

        'А' => 'A', 'Б' => 'B', 'В' => 'V',
        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R',
        'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
    );
    return strtr($string, $converter);
}
echo transliteration('Стрелец');
echo '<br>';

//EXERCISE 2
function getPluralOrSingular(int $number, string $formOne, string $formTwoThreeFour, string $formMany):string
{
    if ($number == 1) {
        $result = $number . ' ' . $formOne;
    }
    if ($number > 1 and $number < 5) {
        $result = $number . ' ' . $formTwoThreeFour;
    }
    if ($number > 4) {
        $result = $number . ' ' . $formMany;
    }
    return $result;
}

echo getPluralOrSingular(6, 'банан', 'банана', 'бананов');
echo '<br>';

//EXERCISE 3
function happyTicket(string $string)
{
    $arr = str_split($string, 1);
    $sumFirst3Dig = 0;
    for ($i = 0; $i < 3; $i++) {
        $sumFirst3Dig += $arr[$i];
    }
    $sumSecond3Dig = 0;
    for ($g = 3; $g < 6; $g++) {
        $sumSecond3Dig += $arr[$g];
    }
    return $sumFirst3Dig + $sumSecond3Dig;
}
echo happyTicket(5552);
echo '<br>';

//EXERCISE 4
function getDivisorsSum(int $number)
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }
    return $sum;
}

function frendlyNumber(int $nOne, int $nTwo)
{
    if (getDivisorsSum($nOne) == $nTwo && getDivisorsSum($nTwo) == $nOne && $nOne !== $nTwo && $nOne < $nTwo) {
        return 'Числа ' . $nOne . ' и ' . $nTwo . ' являются дружественными. <br>';
    }
}
