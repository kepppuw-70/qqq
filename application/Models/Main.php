<?php
namespace Application\Models;
use Application\core\Model;
class Main extends Model{

public function getUser() {
   	$result = $this->db->row('SELECT id, login, password FROM userss');
   	return $result;
	}
}
