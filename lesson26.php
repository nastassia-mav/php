//EXERCISE 1
<fieldset>
    <?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    echo preg_replace('/a.b/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 2
<fieldset>
    <?php
    $str = 'aba aca aea abba adca abea';
    echo preg_replace('/a..a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 3
<fieldset>
    <?php
    $str = 'aba aca aea abba adca abea';
    echo preg_replace('/ab.a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 3
<fieldset>
    <?php
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('/ab+a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 4
<fieldset>
    <?php
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('/ab*a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 5
<fieldset>
    <?php
    $str = 'aa aba abba abbba abca abea';
    echo preg_replace('/ab?a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $str = 'ab abab abab abababab abea';
    echo preg_replace('/(ab)+/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <?php
    $str = 'a.a aba aea';
    echo preg_replace('/a\.a/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 8
<fieldset>
    <?php
    $str = '2+3 223 2223';
    echo preg_replace('/2\+3/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 9
<fieldset>
    <?php
    $str = '23 2+3 2++3 2+++3 345 567';
    echo preg_replace('/2\++3/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 10
<fieldset>
    <?php
    $str = '23 2+3 2++3 2+++3 445 677';
    echo preg_replace('/2\+*3/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 11
<fieldset>
    <?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    echo preg_replace('/\*q+\+/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 12
<fieldset>
    <?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    echo preg_replace('/\*q*\+/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 13
<fieldset>
    <?php
    $str = 'aba accca azzza wwwwa';
    echo preg_replace('/a.+?a/', '!', $str);
    ?>
</fieldset>
<br>
