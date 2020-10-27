<?php
namespace Application\Models;
use Application\core\Model;
class Account extends Model{

public function setUser() {
      
	if (isset($_POST['login']) && isset($_POST['password'])) {
		$config = require 'application/config/db.php';
		$this->link = mysqli_connect($config['host'], $config['user'], $config['password'], $config['name']);
		$sql = mysqli_query($this->link, "INSERT INTO `user` (`firstname`, `secondname`, `email`, `login`, `password`, `userrol`) VALUES ('{$_POST['firstname']}', '{$_POST['secondname']}', '{$_POST['email']}', '{$_POST['login']}', '{$_POST['password']}', '{$_POST['userrol']}')");
   }
}
}