<h3>Регистрация</h3>
<form action="/register" method="post">
	<p>Логин</p>
	<p><input type="text" name="login"></p>
	<p>Пароль</p>
	<p><input type="text" name="password"></p>
	<b><button type="submit" name="regist">Регистрация</button></b>
</form>
<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
		echo '<p>Write in DB!</p>';
      echo '<p>login:'.$_POST['login'].'</p>';
      echo '<p>password:'.$_POST['password'].'</p>';
	}
?>
