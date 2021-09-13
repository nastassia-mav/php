//EXERCISE 1
<fieldset>
    <?php
    $str = 'xaaa baaa';
    echo preg_replace('/(?<=b)aaa/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 2
<fieldset>
    <?php
    $str = 'xaaa baaa saaa';
    echo preg_replace('/(?<!b)aaa/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 3
<fieldset>
    <?php
    $str = 'aaax aaab aaas';
    echo preg_replace('/aaa(?=b)/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 4
<fieldset>
    <?php
    $str = 'aaax aaab aaas';
    echo preg_replace('/aaa(?!b)/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 5
<fieldset>
    <?php
    $str = 'aaa * bbb ** eee * **';
    echo preg_replace('/(?<= )\*(?= )/', '!', $str), '<br>';
    echo preg_replace('/(?<!\*)\*(?!\*)/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $str = 'aaa * bbb ** eee *** kkk ****';
    echo preg_replace('/(?<!\*)\*{2}(?!\*)/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <?php
    $str = 'HHgrtuPPdhFFsGG';
    echo $str, '<br>';
    echo preg_replace('/([a-zA-Z])(?=\1)/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 8
<fieldset>
    <?php
    $str = 'HHgrtuPPdhFFsGG';
    echo $str, '<br>';
    echo preg_replace('/(?<=([a-zA-Z]))\1/', '!', $str);
    ?>
</fieldset>
<br>

//EXERCISE 9
<fieldset>
    <?php
    $str = 'a11sw8rgu3mghg9oi';
    echo $str, '<br>';
    echo preg_replace_callback('/\d+/', 'func', $str);
    function func($arr)
    {
        $result = pow($arr[0], 2);
        return $result;
    }
    ?>
</fieldset>
<br>

//EXERCISE 10
<fieldset>
    <?php
    $str = "2aaa'3'bbb'4'ggg4";
    echo $str, '<br>';
    echo preg_replace_callback('/(?<=\')\d+(?=\')/', 'func1', $str);
    function func1($arr)
    {
        $result = $arr[0] * 2;
        return $result;
    }
    ?>
</fieldset>
<br>
