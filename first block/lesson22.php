//EXERCISE 1
<fieldset>
    <?php
    $date = date('Y-m-d');
    echo 'текущая дата - ' . $date, '<br>';
    $date1 = date_create($date);
    $date2 = date_create('2022-01-01');
    $diff = date_diff($date1, $date2);
    echo $diff->format('%a дней осталось до нового года');
    echo '<br>';
    ?>
</fieldset>
<br>

//EXERCISE 2
<form action = "" method = "post">
    <fieldset>
        <input type = "text" name = "test" placeholder = "Введите год" required>
        <input type = "submit" name = "submit"><br><br>
        <?php
        if (!empty($_REQUEST["submit"])) {
            $year = date("L", mktime(0, 0, 0, 1, 1, $_REQUEST["test"]));
            if ($year == 1) echo "Да";
            if ($year == 0) echo "Нет";
        }
        ?>
    </fieldset>
    <br>
</form>

//EXERCISE 3
<form action = "" method = "post">
    <fieldset>
        <input type = "text" name = "test" placeholder = "Введите дату" required> в формате '01.12.1990' <br><br>
        <input type = "submit" name = "submit_1"><br><br>
        <?php
        if (!empty($_REQUEST['submit_1'])) {
            $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
            echo 'введена дата - ' . $_REQUEST['test'], '<br>';
            $day = explode('.', $_REQUEST['test']);
            $today = date('w', mktime(0, 0, 0, $day[1], $day[0], $day[2]));
            echo 'день недели соответствующий этой дате - ' . $week[$today];
        }
        ?>
    </fieldset>
    <br>
</form>

//EXERCISE 4
<fieldset>
    <?php
    $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    $months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
    $date = explode('-', date('w-j-n-Y'));
    echo $date[1] . ' ' . $months[$date[2]] . ' ' . $date[3] . ' года, ' . $week[$date[0]]
    ?>
</fieldset>
<br>

//EXERCISE 5
<fieldset>
    <form action = "" method = "post">
        <input type = "text" name = "test" placeholder = "Дата рождения" required>
        <input type = "submit" name = "submit_2"><br><br>
        <?php
        $date = explode('-', date('d-m-Y'));
        $today = date('z', mktime(12, 0, 0, $date[1], $date[0], $date[2]));
        if (!empty($_REQUEST['submit_2'])) {
            $birthday = explode('.', $_REQUEST['test']);
            echo 'Введена дата: ' . $_REQUEST['test'], '<br>';
            $dateBirth = date('z', mktime(12, 0, 0, $birthday[1], $birthday[0]));
            if ($dateBirth > $today) {
                $dateOfBirth = $dateBirth - $today + 1;
                echo 'до дня рождения пользователя осталось ' . $dateOfBirth . ' дней', '<br>';
            } else {
                $nextDateBirth = date('z', mktime(12, 0, 0,
                    $birthday[1], $birthday[0], $date[2] + 1));
                $allDayThisYear = date('z', mktime(12, 0, 0, 12, 31));
                $dateOfBirth = ($allDayThisYear - $today) + $nextDateBirth + 1;
                echo 'до дня рождения пользователя осталось ' . $dateOfBirth . ' дней', '<br>';
            }
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $firstSunday = date('z', strtotime("first Sunday of March"));
    $today = date('z', strtotime('today'));
    if ($firstSunday > $today) {
        $countDay = $firstSunday - $today;
        echo $countDay . ' - дней осталось до ближайшей масленницы';
    } else {
        $firstSundayNext = date('z', strtotime("first Sunday of March next Year"));
        $lastDay = date('z', mktime(0, 0, 0, 12, 31));
        $countDay = ($lastDay - $today) + $firstSundayNext;
        echo $countDay . ' - дней осталось до ближайшей масленницы следующего года';
    }
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <form action = "" method = "post">
        <input type = "text" name = "test" checked>
        <input type = "submit" name = "submit_3"><br>
    </form>

    <?php
    if (!empty($_REQUEST['submit_3'])) {
        $date = implode(array_reverse(explode('.', $_REQUEST['test'])));
        if ($date >= '0120' && $date <= '0218') {
            echo 'Водолей';
        }
        if ($date >= '0219' && $date <= '0320') {
            echo 'Рыбы';
        }
        if ($date >= '0321' && $date <= '0419') {
            echo 'Овен';
        }
        if ($date >= '0420' && $date <= '0520') {
            echo 'Телец';
        }
        if ($date >= '0521' && $date <= '0620') {
            echo 'Близнецы';
        }
        if ($date >= '0621' && $date <= '0722') {
            echo 'Рак';
        }
        if ($date >= '0723' && $date <= '0822') {
            echo 'Лев';
        }
        if ($date >= '0823' && $date <= '0922') {
            echo 'Дева';
        }
        if ($date >= '0923' && $date <= '1022') {
            echo 'Весы';
        }
        if ($date >= '1023' && $date <= '1121') {
            echo 'Скорпион';
        }
        if ($date >= '1122' && $date <= '1221') {
            echo 'Стрелец';
        }
        if (($date >= '1222' && $date <= '1231')||($date >= '0101' && $date <= '0119')) {
            echo 'Козерог';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 8
<fieldset>
    <?php
    $holiday = ['31.12', '23.02', '08.03', '09.05'];
    $today = date('d.m');
    foreach ($holiday as $item) {
        if ($item === $today) {
            echo 'C праздником!';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 9
<fieldset>
    <form action = "" method = "post">
        <input type = "text" name = "test" checked placeholder = "31.12">&nbsp Введите дату рождения<br><br>
        <input type = "submit" name =  "submit_4"><br><br>
    </form>

    <?php
    $zodiacSign = ['Водолей' => 'предсказание для Водолеев на текущий день',
        'Рыбы' => 'предсказание для Рыб на текущий день...',
        'Овен' => 'предсказание для Овнов на текущий день...',
        'Телец' => 'предсказание для Тельцов на текущий день...',
        'Близнецы' => 'предсказание для Близнецов на текущий день...',
        'Рак' => 'предсказание для Раков на текущий день...',
        'Лев' => 'предсказание для Львов на текущий день...',
        'Дева' => 'предсказание для Дев на текущий день...',
        'Весы' => 'предсказание для Весов на текущий день...',
        'Скорпион' => 'предсказание для Скорпионов на текущий день...',
        'Стрелец' => 'предсказание для Стрельцов на текущий день...',
        'Козерог' => 'предсказание для Козерог на текущий день...',

    ];
    if (!empty($_REQUEST['submit_4'])) {
        $date = implode(array_reverse(explode('.', $_REQUEST['test'])));

        if ($date >= '0120' && $date <= '0218') {
            echo 'Водолей';
        }
        if ($date >= '0219' && $date <= '0320') {
            echo 'Рыбы';
        }
        if ($date >= '0321' && $date <= '0419') {
            echo 'Овен';
        }
        if ($date >= '0420' && $date <= '0520') {
            echo 'Телец';
        }
        if ($date >= '0521' && $date <= '0620') {
            echo 'Близнецы';
        }
        if ($date >= '0621' && $date <= '0722') {
            echo 'Рак';
        }
        if ($date >= '0723' && $date <= '0822') {
            echo 'Лев';
        }
        if ($date >= '0823' && $date <= '0922') {
            echo 'Дева';
        }
        if ($date >= '0923' && $date <= '1022') {
            echo 'Весы';
        }
        if ($date >= '1023' && $date <= '1121') {
            echo 'Скорпион';
        }
        if ($date >= '1122' && $date <= '1221') {
            echo 'Стрелец';
        }
        if (($date >= '1222' && $date <= '1231') || ($date >= '0101' && $date <= '0119')) {
            echo 'Козерог';
        }
    }
    foreach ($zodiacSign as $key => $elem) {
        if ($zodiac === $key) {
            echo $elem;
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 10
<fieldset>
    <form action="" method="post">
        <textarea name="text" placeholder="Введите текст" required></textarea>
        <input type="submit" name="submit_5"><br><br>
    </form>
    <?php
    if (!empty($_REQUEST['submit_5'])) {
        $countStr = explode(' ', $_REQUEST['text']);
        echo 'количество слов в тексте - ' . count($countStr), '<br>';
        echo 'количество символов в тексте - ' . strlen($_REQUEST['text']), '<br>';
        $countElem = implode($countStr);
        echo 'количество символов за вычетом пробелов - ' . strlen($countElem), '<br>';
    }
    ?>
</fieldset>
<br>

//EXERCISE 11
<fieldset>
    <form action = "" method = "post">
        <textarea name = "text" placeholder = "Введите текст" required></textarea>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = "submit" name = "submit_6"><br><br>
    </form>
    <?php
    if (!empty($_REQUEST['submit_6'])) {
        $text = $_REQUEST['text'];
        echo $text . ' - введенная строка', '<br>';
        echo strlen($text) . ' - всего символов', '<br>';
        $oneItemPercent = 100 / strlen($text);
        $testStr = count_chars($_REQUEST['text'], 1);
        echo count($testStr) . ' - колличество уникальных символов использованых в строке', '<br><br>';
        foreach ($testStr as $key => $elem) {
            $percentElemInStr = $oneItemPercent * $elem;
            echo "процентное содержание символа \"" . chr($key) . "\" в строке составляет - $percentElemInStr%", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 12
<fieldset>
    <form action = "" method = "post">
        <input name = "test" required>;
        <input type = "submit" name = "submit_7"><br><br>
    </form>
    <?php
    $textStr = 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
    echo $textStr . '<br><br>';
    if (!empty($_REQUEST['submit_7'])) {
        $textArr = explode(' ', $textStr);
        echo 'Массив слов - ' . $textStr, '<br><br>';
        $testStr = $_REQUEST['test'];
        echo $testStr . ' - строчная переменная из инпута' . '<br><br>';
        $testArr = str_split($testStr);
        foreach ($textArr as $elem) {
            $result = $elem;
            foreach ($testArr as $item) {
                $result = str_replace($item, '', $result, $count);
                if ($count > 1) {
                    $result = str_pad($result, (strlen($result) + ($count - 1)), $item);
                }
            }
            if ((strlen($elem) - strlen($result)) == strlen($testStr)) {
                echo 'Все введенные буквы содержатся в слове: ' . $elem, '<br><hr>';
            }
        }
    }
    function strReplaceOnce($search, $replace, $text)
    {
        $pos = strpos($text, $search);
        return $pos !== false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
    }
    $str = 'Helo World!';
    echo $str . '<br>';
    $str = str_replace_once('l', 'LL', $str);
    $str = str_replace_once('o', 'OO', $str);
    echo $str . ' - Функция замены ТОЛЬКО Первого вхождения символа в строке';
    ?>
</fieldset>
<br>

//EXERCISE 13
<fieldset>
    <form action = "" method = "post">
        <textarea name = "text" placeholder = "Введите текст" required></textarea>
        <input type = "submit" name = "submit_8"><br><br>
    </form>
    <?php
    $textStr = 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
    echo $textStr . '<br><br>';
    if (!empty($_REQUEST['submit_8'])) {
        $arrEn = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $textArr = explode(' ', $textStr);
        foreach ($arrEn as $item) {
            $flag = false;
            foreach ($textArr as $elem) {
                if ($item === $elem[0] && $flag === false) {
                    $flag = true;
                    echo '<br>', 'слова на букву ' . $item . ':', '<br>';
                }
                if ($item === $elem[0]) {
                    echo $elem . '<br>';
                }
            }
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 14
<fieldset>
    <form action = "" method = "post">
        <input name = "text" required>
        <input type = "submit" name = "submit_9"><br><br>
    </form>
    <?php
    if (!empty($_REQUEST['submit_9'])) {
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
        $textStr = $_REQUEST['text'];
        echo $textStr . '<br>';
        echo strtr($textStr, $converter);
    }
    ?>
</fieldset>
<br>

//EXERCISE 15
<fieldset>
    <form action = "" method = "post">
        <input name = "text" required placeholder = "Введите текст"><br><br>
        <input type = "radio" name = "test" value = "1"> - Преобразовать в транслит<br>
        <input type = "radio" name = "test" value = "2"> - Из транслита обратно<br><br>
        <input type = "submit" name = "submit_10"><br><br>
    </form>

    <?php

    if (!empty($_REQUEST['submit_10'])) {
        $textStr = $_REQUEST['text'];
        echo $textStr . ' - Введённая строка', '<br><br>';
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
        $translit = strtr($textStr, $converter);
        if ($_REQUEST['test'] == 1) {
            echo strtr($textStr, $converter) . ' - В транслит', '<br>';
        } else {
            echo strtr($translit, array_flip($converter)) . ' - Из транслита обратно', '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 16
<fieldset>
    <form action = "" method = "post">
        Вопрос 1
        <?php if (empty($_REQUEST['submit_11'])) echo '<input name="text1" required placeholder="Введите ответ">';
        if (!empty($_REQUEST['submit_11'])) {
            $question1 = 'Правильный ответ 1';
            $textStr1 = $_REQUEST['text1'];
            if ($question1 == $textStr1) {
                echo '<b class="Y"> Верно!</b>';
            } else {
                echo '<b class="N"> Неверно!</b>';
            }
        }
        ?><br><br>
        <input type = submit" name = "submit_11"><br><br>
    </form>
</fieldset>
<br>

//EXERCISE 17
<fieldset>
    <form action = "" method = "post">
        Вопрос: <br><br>
        <?php
        if (empty($_REQUEST['submit_12'])) {
            echo '<input type = "radio" name = "radio" value = "1"> - Ответ 1<br>';
            echo '<input type = "radio" name = "radio" value = "2"> - Ответ 2<br>';
            echo '<input type = "radio" name = "radio" value = "3"> - Ответ 3 <br>';
            echo '<br><input type = "submit" name = "submit_12">';
        }
        if (!empty($_REQUEST['submit_12'])) {
            $question1 = '1'; 
            $text_str1 = $_REQUEST['radio'];
            if ($question1 === $textStr1) {
                echo '<b class="Y"> Верно!</b>';
            } else {
                echo '<b class="N"> Неверно!</b>';
            }
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 18
<fieldset>
    <form action = "" method = "post">
        Вопрос: <br>
        <input type = "checkbox" name = "check[]" value = "Ответ 1"><br>
        <input type = "checkbox" name = "check[]" value = "Ответ 2" checked><br>
        <input type = "checkbox" name = "check[]" value = "Ответ 3"><br>
        <input type = "checkbox" name = "check[]" value = "Ответ 4"><br>
        <input type = "submit" name = "submit_13"><br><br>
        <?php
        if (!empty($_REQUEST['submit_13'])) {
            $question1 = 'Ответ 2';
            $question2 = 'Ответ 4';
            $text_str = $_REQUEST['check'];
            if ($question1 == $text_str[0] || $question2 == $text_str[1] ||
                ($question1 == $text_str[0] && $question2 == $text_str[1])) {
                echo '<b class = "Y"> Верно!</b>';
            } else {
                echo '<b class = "N"> Неверно!</b>';
            }
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 19
<fieldset>
    <form action = "" method = "post">
        <input name = "name" placeholder = "Введите число">
        <input type = "submit" name = "submit_14" value = "Факториал"><br><br>
        <?php
        if (!empty($_REQUEST['submit_14'])) {
            $nameInt = $_REQUEST['name'];
            $result = 1;
            for ($i = $nameInt; $i > 1; $i--) {
                $result *= $i;
            }
            echo $result;
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 21
<fieldset>
    <form action = "" method = "post">
        <?php
        if (!empty($_REQUEST['submit_21'])) {
            $arrInt = [];

            $arrInt[] = $_REQUEST['A'];
            $arrInt[] = $_REQUEST['B'];
            $arrInt[] = $_REQUEST['C'];

            $AIntPow2 = $arrInt[0] ** 2;
            $BIntPow2 = $arrInt[1] ** 2;
            $CIntPow2 = $arrInt[2] ** 2;

            $keyMaxInt = array_keys($arrInt, max($arrInt));
            $keyMaxInt = $keyMaxInt[0];

            if ($keyMaxInt == 0) {
                if ($AIntPow2 == ($BIntPow2 + $CIntPow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
            if ($keyMaxInt == 1) {
                if ($BIntPow2 == ($AIntPow2 + $CIntPow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
            if ($keyMaxInt == 2) {
                if ($CIntPow2 == ($AIntPow2 + $BIntPow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
        }
        ?>
        <p><input type = "number" name = "A" placeholder = "Введите число"
                  value = "<?php if (!empty($_REQUEST['A'])) echo $_REQUEST['A']; ?>" required></p>
        <p><input type = "number" name = "B" placeholder = "Введите число"
                  value = "<?php if (!empty($_REQUEST['B'])) echo $_REQUEST['B']; ?>" required></p>
        <p><input type = "number" name="C" placeholder = "Введите число"
                  value = "<?php if (!empty($_REQUEST['C'])) echo $_REQUEST['C']; ?>" required></p>
        <p><input type = "submit" name = "submit_21"></p>
    </form>
</fieldset>
<br>

//EXERCISE 22
<fieldset>
    <form action = "" method = "post">

        <p><input type = "number" name = "int" placeholder = "Введите число" required></p>
        <p><input type = "submit" name = "submit_22"></p>

        <?php
        if (!empty($_REQUEST['submit_22'])) {
            $int = $_REQUEST['int'];

            for ($i = 1; $i <= $int; $i++) {
                if ($int % $i == 0) {
                    $flag = true;
                    echo $i . '<br>';
                }
            }
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 23
<fieldset>
    <form action = "" method = "post">
        <p><input type = "number" name = "int" placeholder = "Введите число" required></p>
        <p><input type = "submit" name = "submit_23"></p>
        <?php
        if (!empty($_REQUEST['submit_23'])) {
            $int = $_REQUEST['int'];
            var_dump($int);
            echo ' - Введенное число. Простые множители: ', '<br>';
            for ($i = 2; $i <= $int;) {
                $a = $int / $i;
                if (is_int($a)) {
                    $int = $a;
                    echo $i . ' - i', '<br>';
                } else {
                    $i++;
                }
            }
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 24
<fieldset>
    <form action = "" method = "post">
        <p><input type = "number" name = "int_1" placeholder = "Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_24'])) {
                echo $_REQUEST['int_1'];
            } ?></p>
        <p><input type = "number" name = "int_2" placeholder = "Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_24'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type = "submit" name = "submit_24"></p>

        <?php
        if (!empty($_REQUEST['submit_24'])) {
            $int1 = $_REQUEST['int1'];
            $int2 = $_REQUEST['int2'];
            $intArr1 = [];
            $intArr2 = [];

            for ($i = 1; $i <= $int1; $i++) {
                if ($int1 % $i == 0) {
                    $intArr1[] = $i;
                }
            }

            for ($j = 1; $j <= $int2; $j++) {
                if ($int2 % $j == 0) {
                    $intArr2[] = $j;
                }
            }
            var_dump(array_intersect($intArr1, $intArr2));
            echo ' - список общих делителей этих двух чисел.';
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 25
<fieldset>
    <form action = "" method = "post">
        <p><input type = "number" name = "int1" placeholder = "Введите число" required>
        <?php if (!empty($_REQUEST['submit_25'])) {
                echo $_REQUEST['int1'];
            } ?></p>
        <p><input type = "number" name = "int2" placeholder = "Введите число" required>
        <?php if (!empty($_REQUEST['submit_25'])) {
                echo $_REQUEST['int2'];
            } ?></p>
        <p><input type = "submit" name = "submit_25"></p>
        <?php
        if (!empty($_REQUEST['submit_25'])) {
            $int1 = $_REQUEST['int1'];
            $int2 = $_REQUEST['int2'];
            $intArr1 = [];
            $intArr2 = [];
            for ($i = 1; $i <= $int1; $i++) {
                if ($int1 % $i == 0) {
                    $intArr1[] = $i;
                }
            }
            for ($j = 1; $j <= $int2; $j++) {
                if ($int2 % $j == 0) {
                    $intArr2[] = $j;
                }
            }
            var_dump(max(array_intersect($intArr1, $intArr2)));
            echo ' - наибольший общий делитель этих двух чисел.';
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 26
<fieldset>
    <form action = "" method = "post">
        <p><input type = "number" name = "int1" placeholder="Введите число" required>
        <?php if (!empty($_REQUEST['submit_26'])) {
                echo $_REQUEST['int1'];
            } ?></p>
        <p><input type = "number" name = "int2" placeholder = "Введите число" required>
        <?php if (!empty($_REQUEST['submit_26'])) {
                echo $_REQUEST['int2'];
            } ?></p>
        <p><input type = "submit" name = "submit_26"></p>

        <?php
        if (!empty($_REQUEST['submit_26'])) {
            $int1 = $_REQUEST['int1'];
            $int2 = $_REQUEST['int2'];
            $intArr1 = [];
            $intArr2 = [];
            $smallestNumber = [];

            for ($i = 1, $j = 1; ; $i++, $j++) {
                $intArr1[] = $int1 * $i;
                $intArr2[] = $int2 * $j;
                $smallestNumber = arrayIntersect($intArr1, $intArr2);
                if (count($smallestNumber) > 0) {
                    break;
                }
            }
            print_r($smallestNumber);
            echo ' - число, которое делится и на одно, и на второе из введенных чисел.';
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 27
<fieldset>
    <form action = "" method = "post">
        <p><select name = "day">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select></p>

        <p><select name = "month">
                <option value = "1">Январь</option>
                <option value = "2">Февраль</option>
                <option value = "3">Март</option>
                <option value = "4">Апрель</option>
                <option value = "5">Май</option>
            </select></p>

        <p><select name="year">
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
            </select></p>

        <p><input type = "submit" name = "submit_27"></p>

        <?php
        if (!empty($_REQUEST['submit_27'])) {
            $day = $_REQUEST['day'];
            $month = $_REQUEST['month'];
            $year = $_REQUEST['year'];

            $a = date('w', mktime(0, 0, 0, $month, $day, $year));
            $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
            echo $week[$a];
        }
        ?>
    </form>
</fieldset>
