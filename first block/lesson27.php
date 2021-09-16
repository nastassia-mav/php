//EXERCISE 1
    <?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('/ab{2,4}a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 2
<fieldset>
    <?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('/ab{0,3}a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 3
<fieldset>
    <?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    echo preg_replace('/ab{4,}a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 4
<fieldset>
    <?php
    $str = 'a1a a2a a3a a4a a5a aba aca';
    echo preg_replace('/a\da/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 5
<fieldset>
    <?php
    $str = 'a1a a22a a333a a4444a a55555a aba aca';
    echo preg_replace('/a\d+a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $str = 'aa a1a a22a a333a a4444a a55555a aba aca';
    echo preg_replace('/a\d*a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <?php
    $str = 'avb a1b a2b a3b a4b a5b abb acb';
    echo preg_replace('/a\Db/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 8
<fieldset>
    <?php
    $str = 'ave a#b a2b a$b a4b a5b a-b acb';
    echo preg_replace('/a\Wb/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 9
<fieldset>
    <?php
    $str = 'ave a#a a2a a$a a4a a5a a-a aca';
    echo preg_replace('/\s/', '_', $str);
    ?>
</fieldset>
<br>

//EXERCISE 10
<fieldset>
    <?php
    $str = 'aba aea aca aza axa';
    echo preg_replace('/a[bex]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 11
<fieldset>
    <?php
    $str = 'aba aea aca aza axa a.a a+a a*a';
    echo preg_replace('/a[b.+*]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 12
<fieldset>
    <?php
    $str = 'aba a5a aca a4a axa a3a a6a a7a';
    echo preg_replace('/a[3-7]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 13
<fieldset>
    <?php
    $str = 'aba a5a aca aaa axa a3a aga a7a';
    echo preg_replace('/a[a-g]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 14
<fieldset>
    <?php
    $str = 'a.a a5a aca a+a axa a3a aja aza';
    echo preg_replace('/a[a-fj-z]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 15
<fieldset>
    <?php
    $str = 'a.a a5a aca a+a aGa a3a aja aKa';
    echo preg_replace('/a[a-fA-Z]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 16
<fieldset>
    <?php
    $str = 'aba aea aca aza axa a-a a#a';
    echo preg_replace('/a[^ex ]a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 17
<fieldset>
    <?php
    $str = 'wйw wяw wёw wqw';
    echo preg_replace('/w[а-яё]w/u', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 18
<fieldset>
    <?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    echo preg_replace('/a[a-z]+a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 19
<fieldset>
    <?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    echo preg_replace('/a[a-zA-Z]+a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 20
<fieldset>
    <?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    echo preg_replace('/a[a-z0-9]+a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 21
<fieldset>
    <?php
    $str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
    echo preg_replace('/[а-яА-ЯёЁ]+/u', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 22
<fieldset>
    <?php
    $str = 'aaa aaa aaa';
    echo preg_replace('/^aaa/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 23
<fieldset>
    <?php
    $str = 'aaa aaa aaa';
    echo preg_replace('/aaa$/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 24
<fieldset>
    <?php
    $str = 'aeeea aeea aea axa axxa axxxa';
    echo preg_replace('/a(e+|x+)a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 25
<fieldset>
    <?php
    $str = 'aeeea aeea aea axa axxa axxxa';
    echo preg_replace('/a(ee|x+)a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 26
<fieldset>
    <?php
    $str = 'xbx aca aea abba adca abea';
    echo preg_replace('/\b/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 27
<fieldset>
    <?php
    $str = 'a\a abc';
    echo preg_replace('/a\\\\a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 28
<fieldset>
    <?php
    $str = 'a\a a\\a a\\\\\a';
    echo preg_replace('/a\\\\{3}a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 29
<fieldset>
    <?php
    $str = 'bbb /aaa\ bbb /ccc\\';
    echo preg_replace('/\/[a-z]+\\\\/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 30
<fieldset>
    <?php
    $str = 'bbb <b> hello </b>, <b> world </b> eee';
    echo preg_replace('/<b>(.+?)<\/b>/', '!', $str);
    ?>
</fieldset>
<br>
