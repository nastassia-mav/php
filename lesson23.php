//EXERCISE 1
<fieldset>
    <?php
    $name = 'Настя';
    $arr = ['name' => 'Настя'];
    echo 'Варианты вывода строки + переменные + массив:', '<br>';
    echo '1 - Привет, ' . $name . '! ', '<br>';
    echo '2 - Привет, ' . $arr['name'] . '! ', '<br>';
    echo "3 - Привет, $name!", '<br>';
    echo "4 - Привет, $arr[name]!", '<br>';

    ?>
</fieldset>
<br>

//EXERCISE 2
<fieldset>

    <?php
    $arr = ['name' => 'Иван', 'age' => 30];

    echo '1 - Привет, ' . $arr['name'] . '! Тебе' . $arr['age'] . 'лет.', '<br>';
    echo "2 - Привет, $arr[name]! Тебе $arr[age] лет.", '<br>';
    echo "3 - Привет, {$arr['name']}! Тебе {$arr['age']} лет.", '<br>';
    ?>
</fieldset>
<br>

//EXERCISE 3
<fieldset>
    <?php
    $text = '!!!';
    echo '&lt;p&gt;' . $text . "&lt;/p&gt;";
    ?>
</fieldset>
<br>

//EXERCISE 4
<fieldset>
    <?php
    $href = 'index.html';
    $text = 'ссылка';
    echo "&lt;a href=\"$href\"&gt;$text&lt;/a&gt;", '<br>';
    echo '&lt;p&gt;' . $text . "&lt;/p&gt;";
    ?>
</fieldset>
<br>

//EXERCISE 5
<fieldset>
    <?php
    $arr = ['1', '2', '3'];
    foreach ($arr as $elem) {
        echo "<p>$elem</p>";
    }
    ?>
</fieldset>
<br>

//EXERCISE 6
<fieldset>
    <?php
    $arr = ['1', '2', '3'];
    echo '<ul>';
    foreach ($arr as $elem) {
        echo "<li>$elem</li>";
    }
    echo '</ul>';
    ?>
</fieldset>
<br>

//EXERCISE 7
<fieldset>
    <?php
    $arr = [
        ['href' => '1.html', 'text' => 'ссылка 1'],
        ['href' => '2.html', 'text' => 'ссылка 2'],
        ['href' => '3.html', 'text' => 'ссылка 3'],
    ];

    foreach ($arr as $elem) {
        $href = $elem['href'];
        $text = $elem['text'];
        echo "&lt;a href=\"$href\"&gt; $text &lt;/a&gt;", '<br>'; 
    }
    ?>
</fieldset>
<br>

//EXERCISE 8
<fieldset>
    <?php
    $arr = [
        ['href' => '1.html', 'text' => 'ссылка 1'],
        ['href' => '2.html', 'text' => 'ссылка 2'],
        ['href' => '3.html', 'text' => 'ссылка 3'],
    ];

    echo '&lt;ul&gt;', '<br>';
    foreach ($arr as $elem) {
        $href = $elem['href'];
        $text = $elem['text'];
        echo "&lt;li&gt;&lt;a href=\"$href\"&gt; $text &lt;/a&gt;&lt;/li&gt;", '<br>'; 
    }
    echo '&lt;ul&gt;';
    ?>
</fieldset>
<br>

//EXERCISE 9
<fieldset>
    <?php
    $arr = [
        ['name' => 'Коля', 'age' => 30, 'salary' => 500],
        ['name' => 'Вася', 'age' => 31, 'salary' => 600],
        ['name' => 'Петя', 'age' => 32, 'salary' => 700],
    ];

    echo '<table>';
    echo '<tr>';
    foreach ($arr as $elem) {
        echo '<tr>';
        foreach ($elem as $key => $item) {
            echo "<td>$elem[$key]</td>";
        }
        echo '</tr>';

    }
    echo '</tr>';
    echo '</table>';
    ?>
</fieldset>
<br>

