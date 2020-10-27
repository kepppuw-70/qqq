<?php
namespace Application\Models;
use Application\core\Model;
class Main extends Model{


public function getSelectUser($arr_id) {
      $sting_id = $arr_id[0];
      $num = count($arr_id);
      for ($i=1; $i < $num; $i++) { 
         $sting_id = $sting_id.', '.$arr_id[$i];
      }
      $sql = 'SELECT * FROM user WHERE id IN ('.$sting_id.')';
   	$result = $this->db->row($sql);
   	return $result;
	}

public function getAllUser() {
   	$result = $this->db->row('SELECT * FROM user');
   	return $result;
	}

}

         