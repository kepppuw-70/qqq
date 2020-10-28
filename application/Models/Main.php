<?php
namespace Application\Models;
use Application\core\Model;
class Main extends Model{

public function selectWhereUsers() {
      $column = require 'application/config/tabl.php';
      $arr_id = [];
      $k = 0;
      if ($_POST) {
         $predicat = $_POST['predicat'];
         for ($i=0; $i < 9; $i++) {
            if (!empty($_POST[$column[$i]])){
               $arr_id[$k] = $column[$i].'='."'".$_POST[$column[$i]]."'";
               $k++;
            } 
         }
      }
      $num = count($arr_id);
      if ($num == 0) {
         $sql = 'SELECT * FROM user';
      } else {
         if ($num == 1) {
            $sql = "SELECT * FROM user WHERE ".$arr_id[0];
         } else {
            $sting = $arr_id[0];
            for ($i=1; $i < $num; $i++) { 
               $sting = $sting.$predicat.$arr_id[$i];
            }
            $sql = "SELECT * FROM user WHERE ".$sting;
         }
      }
   	$result = $this->db->row($sql);
   	return $result;
	}
}

         