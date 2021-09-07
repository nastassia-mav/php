//EXERCISE 1
<fieldset>
    <?php
    $date = date('Y-m-d');
    echo 'текущая дата - ' . $date, '<br>';
    $date1 = date_create($date);
    $date2 = date_create('2022-01-01');
    $diff = date_diff($date1, $date2);
    echo $diff -> format('%a дней осталось до нового года');
    echo '<br>';
    ?>
</fieldset>
<br>

//EXERCISE 2
<form action="" method = "post">
    <fieldset>
        <input type = "text" name = "test" placeholder = "Введите год" required>&nbsp
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
        <input type = "text" name = "test" placeholder = "Введите дату" required>&nbsp в формате '01.12.1990' <br><br>
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
        <input type = "text" name = "test" placeholder = "Дата рождения" required>&nbsp
        <input type = "submit" name = "submit_2"><br><br>
        <?php
        $date = explode('-', date('d-m-Y'));
        $today = date('z', mktime(12, 0, 0, $date[1], $date[0], $date[2]));
        if (!empty($_REQUEST['submit_2'])) {
            $birthday = explode('.', $_REQUEST['test']); 
            echo 'Введена дата: ' . $_REQUEST['test'], '<br>';
            $date_birth = date('z', mktime(12, 0, 0, $birthday[1], $birthday[0]));
            if ($date_birth > $today) {
                $date_of_birth = $date_birth - $today + 1;
                echo 'до дня рождения пользователя осталось ' . $date_of_birth . ' дней', '<br>';
            } else {
                $next_date_birth = date('z', mktime(12, 0, 0,
                    $birthday[1], $birthday[0], $date[2] + 1));
                $all_day_this_year = date('z', mktime(12, 0, 0, 12, 31));
                $date_of_birth = ($all_day_this_year - $today) + $next_date_birth + 1;
                echo 'до дня рождения пользователя осталось ' . $date_of_birth . ' дней', '<br>';
            }
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $first_sunday = date('z', strtotime("first Sunday of March")); 
    $today = date('z', strtotime('today')); 
    if ($first_sunday > $today) {
        $count_day = $first_sunday - $today;
        echo $count_day . ' - дней осталось до ближайшей масленницы';
    } else {
        $first_sunday_next = date('z', strtotime("first Sunday of March next Year"));
        $last_day = date('z', mktime(0, 0, 0, 12, 31));
        $count_day = ($last_day - $today) + $first_sunday_next;
        echo $count_day . ' - дней осталось до ближайшей масленницы следующего года';
    }
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <form action = "" method = "post">
        <input type = "text" name = "test" checked>&nbsp
        <input type = "submit" name = "submit_3"><br>
    </form>

    <?php
    if (!empty($_REQUEST['submit_3'])) {
        $date = implode(array_reverse(explode('.', $_REQUEST['test'])));
        if ($date >= '0120' and $date <= '0218') {
            echo 'Водолей';
        }
        if ($date >= '0219' and $date <= '0320') {
            echo 'Рыбы';
        }
        if ($date >= '0321' and $date <= '0419') {
            echo 'Овен';
        }
        if ($date >= '0420' and $date <= '0520') {
            echo 'Телец';
        }
        if ($date >= '0521' and $date <= '0620') {
            echo 'Близнецы';
        }
        if ($date >= '0621' and $date <= '0722') {
            echo 'Рак';
        }
        if ($date >= '0723' and $date <= '0822') {
            echo 'Лев';
        }
        if ($date >= '0823' and $date <= '0922') {
            echo 'Дева';
        }
        if ($date >= '0923' and $date <= '1022') {
            echo 'Весы';
        }
        if ($date >= '1023' and $date <= '1121') {
            echo 'Скорпион';
        }
        if ($date >= '1122' and $date <= '1221') {
            echo 'Стрелец';
        }
        if (($date >= '1222' and $date <= '1231') or ($date >= '0101' and $date <= '0119')) {
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
        <input type = "submit" name = "submit_4"><br><br>
    </form>

    <?php
    $zodiac_sign = ['Водолей' => 'предсказание для Водолеев на текущий день',
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

        if ($date >= '0120' and $date <= '0218') {
            echo 'Водолей';
        }
        if ($date >= '0219' and $date <= '0320') {
            echo 'Рыбы';
        }
        if ($date >= '0321' and $date <= '0419') {
            echo 'Овен';
        }
        if ($date >= '0420' and $date <= '0520') {
            echo 'Телец';
        }
        if ($date >= '0521' and $date <= '0620') {
            echo 'Близнецы';
        }
        if ($date >= '0621' and $date <= '0722') {
            echo 'Рак';
        }
        if ($date >= '0723' and $date <= '0822') {
            echo 'Лев';
        }
        if ($date >= '0823' and $date <= '0922') {
            echo 'Дева';
        }
        if ($date >= '0923' and $date <= '1022') {
            echo 'Весы';
        }
        if ($date >= '1023' and $date <= '1121') {
            echo 'Скорпион';
        }
        if ($date >= '1122' and $date <= '1221') {
            echo 'Стрелец';
        }
        if (($date >= '1222' and $date <= '1231') or ($date >= '0101' and $date <= '0119')) {
            echo 'Козерог';
        }
    }
    foreach ($zodiac_sign as $key => $elem) {
        if ($zodiac === $key) {
            echo $elem;
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 10
<fieldset>
    <form action = "" method = "post">
        <textarea name = "text" placeholder = "Введите текст" required></textarea>&nbsp
        <input type = "submit" name = "submit_5"><br><br>
    </form>

    <?php
    if (!empty($_REQUEST['submit_5'])) {
        $count_str = explode(' ', $_REQUEST['text']);
        echo 'количество слов в тексте - ' . count($count_str), '<br>';
        echo 'количество символов в тексте - ' . strlen($_REQUEST['text']), '<br>';
        $count_elem = implode($count_str);
        echo 'количество символов за вычетом пробелов - ' . strlen($count_elem), '<br>';
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
        $one_item_percent = 100 / strlen($text); 
        $test_str = count_chars($_REQUEST['text'], 1); 
        echo count($test_str) . ' - колличество уникальных символов использованых в строке', '<br><br>';
        foreach ($test_str as $key => $elem) {
            $percent_elem_in_str = $one_item_percent * $elem;
            echo "процентное содержание символа \"" . chr($key) . "\" в строке составляет - $percent_elem_in_str%", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 12
<fieldset>
    <form action = "" method = "post">
        <input name = "test" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = "submit" name = "submit_7"><br><br>
    </form>

    <?php
    $text_str = 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
    echo $text_str . '<br><br>';

    if (!empty($_REQUEST['submit_7'])) {
        $text_arr = explode(' ', $text_str); 
        echo 'Массив слов - ' . $text_str, '<br><br>';
        $test_str = $_REQUEST['test']; 
        echo $test_str . ' - строчная переменная из инпута' . '<br><br>';
        $test_arr = str_split($test_str); 
        foreach ($text_arr as $elem) { 
            $result = $elem;
            foreach ($test_arr as $item) { 
                $result = str_replace($item, '', $result, $count); 
                if ($count > 1) { 
                    $result = str_pad($result, (strlen($result) + ($count - 1)), $item);
                }
            }
            if ((strlen($elem) - strlen($result)) == strlen($test_str)) {
                echo 'Все введенные буквы содержатся в слове: ' . $elem, '<br><hr>';
            }
        }
    }

    function str_replace_once($search, $replace, $text)
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
        <textarea name = "text" placeholder = "Введите текст" required></textarea>&nbsp;&nbsp;
        <input type = "submit" name = "submit_8"><br><br>
    </form>

    <?php
    $text_str = 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
    echo $text_str . '<br><br>'; 

    if (!empty($_REQUEST['submit_8'])) {
        $arr_en = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $text_arr = explode(' ', $text_str); 
        foreach ($arr_en as $item) { 
            $flag = false;
            foreach ($text_arr as $elem) { 
                if ($item === $elem[0] and $flag === false) {
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
        <input name = "text" required>&nbsp;&nbsp;&nbsp;&nbsp;
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
        $text_str = $_REQUEST['text'];
        echo $text_str . '<br>';
        echo strtr($text_str, $converter);
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
        $text_str = $_REQUEST['text'];
        echo $text_str . ' - Введённая строка', '<br><br>';
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
        $translit = strtr($text_str, $converter);
        if ($_REQUEST['test'] == 1) {
            echo strtr($text_str, $converter) . ' - В транслит', '<br>';
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
            $text_str1 = $_REQUEST['text1'];
            if ($question1 == $text_str1) {
                echo '<b class="Y"> Верно!</b>';
            } else {
                echo '<b class="N"> Неверно!</b>';
            }
        }
        ?><br><br>
        <input type = "submit" name = "submit_11"><br><br>
    </form>
</fieldset>
<br>

//EXERCISE 17
<fieldset>
    <form action = "" method = "post">
        Вопрос: <br><br>
        <?php
        if (empty($_REQUEST['submit_12'])) {
            echo '<input type="radio" name="radio" value="1"> - Ответ 1<br>
<input type="radio" name="radio" value="2"> - Ответ 2<br>
<input type="radio" name="radio" value="3"> - Ответ 3 <br>
<br><input type="submit" name="submit_12">';
        }
        if (!empty($_REQUEST['submit_12'])) {
            $question1 = '1'; // Правильный ответ!
            $text_str1 = $_REQUEST['radio'];
            if ($question1 == $text_str1) {
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
            if ($question1 == $text_str[0] or $question2 == $text_str[1] or
                ($question1 == $text_str[0] and $question2 == $text_str[1])) {
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
        <input name = "name" placeholder = "Введите число">&nbsp;&nbsp;
        <input type = "submit" name = "submit_14" value = "Факториал"><br><br>

        <?php
        if (!empty($_REQUEST['submit_14'])) {
            $name_int = $_REQUEST['name'];
            $result = 1;
            for ($i = $name_int; $i > 1; $i--) {
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
            $arr_int = [];

            $arr_int[] = $_REQUEST['A'];
            $arr_int[] = $_REQUEST['B'];
            $arr_int[] = $_REQUEST['C'];

            $A_int_pow2 = $arr_int[0] ** 2;
            $B_int_pow2 = $arr_int[1] ** 2;
            $C_int_pow2 = $arr_int[2] ** 2;

            $key_max_int = array_keys($arr_int, max($arr_int)); 
            $key_max_int = $key_max_int[0]; 

            if ($key_max_int == 0) {
                if ($A_int_pow2 == ($B_int_pow2 + $C_int_pow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
            if ($key_max_int == 1) {
                if ($B_int_pow2 == ($A_int_pow2 + $C_int_pow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
            if ($key_max_int == 2) {
                if ($C_int_pow2 == ($A_int_pow2 + $B_int_pow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
        }
        ?>

        <p><input type="number" name="A" placeholder="Введите число"
                  value="<?php if (!empty($_REQUEST['A'])) echo $_REQUEST['A']; ?>" required></p>
        <p><input type="number" name="B" placeholder="Введите число"
                  value="<?php if (!empty($_REQUEST['B'])) echo $_REQUEST['B']; ?>" required></p>
        <p><input type="number" name="C" placeholder="Введите число"
                  value="<?php if (!empty($_REQUEST['C'])) echo $_REQUEST['C']; ?>" required></p>
        <p><input type="submit" name="submit_21"></p>

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
        <p><input type="number" name="int_2" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_24'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type="submit" name="submit_24"></p>

        <?php
        if (!empty($_REQUEST['submit_24'])) {
            $int_1 = $_REQUEST['int_1']; 
            $int_2 = $_REQUEST['int_2']; 
            $int_arr_1 = []; 
            $int_arr_2 = [];

            for ($i = 1; $i <= $int_1; $i++) {
                if ($int_1 % $i == 0) {
                    $int_arr_1[] = $i;
                }
            }

            for ($j = 1; $j <= $int_2; $j++) {
                if ($int_2 % $j == 0) {
                    $int_arr_2[] = $j;
                }
            }


            var_dump(array_intersect($int_arr_1, $int_arr_2));
            echo ' - список общих делителей этих двух чисел.';
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 25
<fieldset>
    <form action = "" method = "post">
        <p><input type = "number" name = "int_1" placeholder = "Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_25'])) {
                echo $_REQUEST['int_1'];
            } ?></p>
        <p><input type="number" name="int_2" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_25'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type="submit" name="submit_25"></p>
        <?php
        if (!empty($_REQUEST['submit_25'])) {
            $int_1 = $_REQUEST['int_1']; 
            $int_2 = $_REQUEST['int_2']; 
            $int_arr_1 = [];
            $int_arr_2 = [];

            for ($i = 1; $i <= $int_1; $i++) {
                if ($int_1 % $i == 0) {
                    $int_arr_1[] = $i;
                }
            }
 

            for ($j = 1; $j <= $int_2; $j++) {
                if ($int_2 % $j == 0) {
                    $int_arr_2[] = $j;
                }
            }


            var_dump(max(array_intersect($int_arr_1, $int_arr_2)));
            echo ' - наибольший общий делитель этих двух чисел.';
        }
        ?>
    </form>
</fieldset>
<br>

//EXERCISE 26
<fieldset>
    <form action = "" method = "post">
        <p><input type = "number" name = "int_1" placeholder = "Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_26'])) {
                echo $_REQUEST['int_1'];
            } ?></p>
        <p><input type = "number" name = "int_2" placeholder = "Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_26'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type = "submit" name = "submit_26"></p>

        <?php
        if (!empty($_REQUEST['submit_26'])) {
            $int_1 = $_REQUEST['int_1']; 
            $int_2 = $_REQUEST['int_2']; 
            $int_arr_1 = [];
            $int_arr_2 = [];
            $smallest_number = []; 

            for ($i = 1, $j = 1; ; $i++, $j++) {
                $int_arr_1[] = $int_1 * $i;
                $int_arr_2[] = $int_2 * $j;
                $smallest_number = array_intersect($int_arr_1, $int_arr_2); 
                if (count($smallest_number) > 0) { 
                    break;
                }
            }
            print_r($smallest_number);
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

        <p><select name = "year">
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
