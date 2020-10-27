<h3>Регистрация</h3>
<form action="/register" method="post">
   <p>Имя</p>
	<p><input type="text" name="firstname"></p>
	<p>Фамилия</p>
	<p><input type="text" name="secondname"></p>
	<p>Почта</p>
	<p><input type="text" name="email"></p>
	<p>Логин</p>
	<p><input type="text" name="login"></p>
	<p>Пароль</p>
	<p><input type="text" name="password"></p>
	<p>Доступ</p>
	<p><input type="text" name="userrol"></p>
	<b><button type="submit" name="regist">Регистрация</button></b>
</form>
<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
		echo '<p>Write in DB!</p>';
      echo '<p>firstname:'.$_POST['firstname'].'</p>';
	   echo '<p>secondname:'.$_POST['secondname'].'</p>';
	   echo '<p>email:'.$_POST['email'].'</p>';
	   echo '<p>login:'.$_POST['login'].'</p>';
	   echo '<p>password:'.$_POST['password'].'</p>';
	   echo '<p>userrol:'.$_POST['userrol'].'</p>';

	}
?>
