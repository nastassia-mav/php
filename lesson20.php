//EXERCISE 1
<form action = "" method = "post">
    <fieldset>
        <input type = "text" name = "name" placeholder = "Введите Имя" required>
        <input type = "hidden" name = "hi" value = "0">
        <input type = "checkbox" name = "hi" value = "1"> 
        <input type = "submit"><br><br>
        <?php
        if (isset($_REQUEST["hi"]) and $_REQUEST["hi"] == 1) {
            echo "Приветствую, " . $_REQUEST["name"];
        }
        if (isset($_REQUEST["hi"]) and $_REQUEST["hi"] == 0) {
            echo "До новых встреч, " . $_REQUEST["name"];
        }
        ?>
    </fieldset>
</form>

//EXERCISE 2
<form action = "" method = "post">
    <fieldset>
        Укажите технологии, которыми вы владеете:<br>
        <input type = "checkbox" name = "lang[]" value = "php" checked>&nbsp;php<br>
        <input type = "checkbox" name = "lang[]" value = "html">&nbsp;html<br>
        <input type = "checkbox" name = "lang[]" value = "css">&nbsp;css<br>
        <input type = "checkbox" name = "lang[]" value = "javascript">&nbsp;javascript<br><br>
        <input type = "submit" name = "submit"><br><br>
        <?php
        if (!empty($_REQUEST['submit'])) {
            if (isset($_REQUEST['lang'])) {
                echo 'Вы знаете: ' . implode(', ', $_REQUEST['lang']) . '!';
            } else {
                echo 'Вы не знаете никаких языков?';
            }
        }
        ?>
    </fieldset>
</form>

//EXERCISE 3
<form action = "" method = "post">
    <fieldset>
        Вы знаете PHP?<br>
        <input type = "radio" name = "test" value="1" checked> - Y <br>
        <input type = "radio" name = "test" value="2"> - N <br>
        <input type = "submit" name = "submit_2"><br><br>
        <?php
        if (!empty($_REQUEST["submit_2"])) {
            if ($_REQUEST["test"] == 1) echo "Да";
            if ($_REQUEST["test"] == 2) echo "Нет";
        }
        ?>
    </fieldset>
</form>

//EXERCISE 4
<form action = "" method = "post">
    <fieldset>
        Укажите возраст:<br>
        <input type = "radio" name = "test" value = "1"> - менее 20 лет <br>
        <input type = "radio" name = "test" value = "2"> - 20-25 <br>
        <input type = "radio" name = "test" value = "3"> - 26-30 <br>
        <input type = "radio" name = "test" value = "4"> - более 30 <br>
        <input type = "submit"><br><br>
        <?php
        if (!empty($_REQUEST["test"])) {
            echo "Вы указали: ";
            if ($_REQUEST["test"] == 1) echo "менее 20 лет";
            if ($_REQUEST["test"] == 2) echo "20-25";
            if ($_REQUEST["test"] == 3) echo "26-30";
            if ($_REQUEST["test"] == 4) echo "более 30";
        }
        ?>
    </fieldset>
</form>

//EXERCISE 5
<form action = "" method = "post">
    <fieldset>
        Укажите возраст:&nbsp;
        <select>
            <option>менее 20 лет</option>
            <option>20-25</option>
            <option>26-30</option>
            <option>более 30 лет</option>
        </select>&nbsp;
        <input type = "submit"><br><br>
    </fieldset>
</form>

//EXERCISE 6
<form action = "" method = "post">
    <fieldset>
        <p>Какие языки вы знаете? (зажать клавишу Ctrl)</p>
        <select multiple name = "lang[]">
            <option value = "php">php</option>
            <option value = "css">css</option>
            <option value = "html">html</option>
            <option value = "javascript">javascript</option>
        </select>&nbsp;
        <input type = "submit"><br><br>
        <?php
        if (!empty($_REQUEST["lang"])) {
            echo "Вы указали: " . implode(", ", $_REQUEST["lang"]) . ".";
        }
        ?>
    </fieldset>
</form>

//EXERCISE 7-8
<form action = "" method = "post">
    <fieldset>
        <?php
        function input($type, $name, $value)
        {
            if (isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];
            }
            return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" 
placeholder="Введите сообщение"><input type="submit">';
        }

        echo input("text", "User", 19);
        ?>
    </fieldset>
</form>

//EXERCISE 9
<form action = "" method = "post">
    <fieldset>
        <?php
        echo checkbox("check");
        ?>
        <input type="submit">
    </fieldset>
</form>

<?php
function checkbox($name)
{
    return '<input type="hidden" name="' . $name . '" value="0">
            <input type="checkbox" name="' . $name . '" value="1">';
}
?>

//EXERCISE 10
<form action = "" method = "post">
    <fieldset>
        <?php
        echo check("check1");
        echo check("check2");
        echo check("check3");
        echo check("check4");
        echo check("check5");
        ?>
        <input type = "submit">
    </fieldset>
</form>

<?php
function check($name)
{
    if (!empty($_REQUEST[$name])) $checked = "checked"; else $checked = "";
    return '<input type="hidden" name="' . $name . '" value="0">
<input type="checkbox" name="' . $name . '" value="1" ' . $checked . '>';
}
?>
