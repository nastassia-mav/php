//EXERCISE 1
<fieldset>
    <?php
    $str = 'aaa@bbb eee7@kkk';
    echo preg_replace('/([a-z\d]+)@([a-z\d]+)/', '$2@$1', $str);
    ?>
</fieldset>
<br>

//EXERCISE 2
<fieldset>
    <?php
    $str = 'a1b2c3';
    echo preg_replace('/(\d)/', '$1$1', $str);
    ?>
</fieldset>
<br>

//EXERCISE 3
<fieldset>
    <?php
    $str = 'aae xxz 33a';
    echo preg_replace('/([a-z\d])\1/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 4
<fieldset>
    <?php
    $str = 'aaa bcd xxx efg';
    echo preg_replace('/([a-z\d])\1+/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 5
<fieldset>
    <?php
    $arr = [
        'mymail@mail.ru',
        'my.mail@mail.ru',
        'my-mail@mail.ru',
        'my_mail@mail.ru',
        'mail@mail.com',
        'mail@mail.by',
        'mail@yandex.ru'
    ];
    foreach ($arr as $elem) {
        echo preg_match('/^[a-zA-Z0-9_.-]+@[a-z]+\.[a-z]{2,3}$/', $elem), '<br>';
    }
    ?>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $str = 'Примеры емэйлов для тестирования mymail@mail.ru my.mail@mail.ru my-mail@mail.ru
            my_mail@mail.ru mail@mail.com';

    echo preg_match_all('/[a-zA-Z0-9_.-]+@[a-z]+\.[a-z]{2,3}/u', $str, $m);
    //var_dump($m);
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <?php
    $arr = [
        'site.ru',
        'site.com',
        'my-site123.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/^[a-z0-9-]+\.[a-z]{2,3}$/', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 8
<fieldset>
    <?php
    $arr = [
        'hello.site.ru',
        'hello.site.com',
        'hello.my-site.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/^[a-z0-9]+\.[a-z0-9-]+\.[a-z]{2,3}$/', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом 3-го уровня", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 9
<fieldset>
    <?php
    $arr = [
        'http://site.ru',
        'http://site.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('#^http://[a-z0-9]+\.[a-z]{2,3}$#', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом с http", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 10
<fieldset>
    <?php
    $arr = [
        'http://site.ru',
        'https://site.com'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('#^https?://[a-z0-9]+\.[a-z]{2,3}$#', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом с http или https", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 11
<fieldset>
    <?php
    $arr = [
        'http://site.ru',
        'http://site.ru/',
        'https://site.com',
        'https//site.com',
        'https://site.com/'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('#^https?://[a-z0-9]+\.[a-z]{2,3}/?$#', $elem);
        if ($item == 1) {
            echo "$elem, - строка является доменом", '<br>';
        } else {
            echo "$elem, - строка НЕ является доменом", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 12
<fieldset>
    <?php
    $str = 'https://site.com/';
    echo preg_match('/^https?/', $str);
    ?>
</fieldset>
<br>

//EXERCISE 13
<fieldset>
    <?php
    $arr = [
        'site.txt',
        'site.tt',
        'site.html',
        'site.htm',
        'site.php'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/\.(txt|html|php)$/', $elem);
        if ($item == 1) {
            echo "$elem, - Верно", '<br>';
        } else {
            echo "$elem, -  НЕ Верно", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 14
<fieldset>
    <?php
    $arr = [
        'site.jpg',
        'site.jg',
        'site.jpe',
        'site.jpeg'
    ];
    foreach ($arr as $elem) {
        $item = preg_match('/\.(jpe?g)$/', $elem);
        if ($item == 1) {
            echo "$elem, - заканчивается расширением jpg или jpeg", '<br>';
        } else {
            echo "$elem, -  НЕ Верно", '<br>';
        }
    }
    ?>
</fieldset>
<br>

//EXERCISE 15
<fieldset>
    <?php
    $str = '467768745535';
    $item = preg_match('/^\d{1,12}$/', $str);
    if ($item == 1) {
        echo "$str - является", '<br>';
    } else {
        echo "$str -  Не верно", '<br>';
    }

    ?>
</fieldset>
<br>

//EXERCISE 16
<fieldset>
    <?php
    $str = '256asf5asg 2a6sg 78sah5h';
    preg_match_all('/\d/', $str, $arr);
    ?>
</fieldset>
<br>

//EXERCISE 17
<fieldset>
    <?php
    $str = '31-12-2014';
    echo preg_replace('/(\d{2})\-(\d{2})\-(\d{4})/', '$3.$2.$1', $str);
    ?>
</fieldset>
<br>

//EXERCISE 18
<fieldset>
    <?php
    $str1 = 'http://site.ru';
    $str2 = 'http://site.com';
    echo preg_replace('#http://([a-z0-9]+\.[a-z]{2,3})#', '<a href="$0">$1</a>', $str1), '<br>';
    echo preg_replace('#http://([a-z0-9]+\.[a-z]{2,3})#', '<a href="$0">$1</a>', $str2);
    ?>
</fieldset>
<br>
