//EXERCISE 1
<form action = "" method = "GET">
    <input name = "name" type = "text">
    <input type = "submit">
</form>
<?php
if(isset($_REQUEST["name"])){
    $name = $_REQUEST["name"];
    echo 'Привет, ' . $name;
}
?>

//EXERCISE 2
<form action = "" method = "GET">
    <input type = "text" name = "name">
    <input type = "text" name = "age">
    <textarea name = "message"></textarea>
    <input type = "submit" name = "submit">
</form>
<?php
if (isset($_REQUEST['submit'])){
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $messsage = strip_tags($_REQUEST['message']);
    echo "Привет, $name, $age лет. <br> Твое сообщение: $message";
}
?>

//EXERCISE 3
<?php
	if (!isset($_REQUEST['age'])) {
?>
		<form action="" method="GET">
			<input type="text" name="age">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	if (isset($_REQUEST['age'])) {
		$age = strip_tags($_REQUEST['age']);
		echo 'Ваш возраст: '.$age;
	}
?>

//EXERCISE 4
<form action="" method="GET">
	<input type="text" name="login">
	<input type="password" name="pass">
	<input type="submit" name="submit">
</form>

<?php
	if (isset($_REQUEST['submit'])) {
		$login = 'user';
		$pass = '123456';
		$formLogin = trim($_REQUEST['login']);
		$formPass = trim($_REQUEST['pass']);
		if ($login == $formLogin and $pass == $formPass) {
			echo 'Доступ разрешен!';
		} else {
			echo 'Доступ запрещен!';
		}
	}
?>

//EXERCISE 5
<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<input type="submit">
</form>
<?php
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $name;
	}
?>

//EXERCISE 6
<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
	<input type="submit">
</form>