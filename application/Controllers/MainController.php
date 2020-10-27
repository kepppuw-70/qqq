<?php
namespace Application\Controllers;
use Application\Core\Controller;
use Application\Lib\Db;
class MainController extends Controller
{      
	public function indexAction() {
      $arr_id = [
         2, 4, 5
      ];
      $result = $this->model->getSelectUser($arr_id);
      $vars = [
         'news' => $result,
      ];
      $this->view->render('Главная страница', $vars);
   }

   public function contactAction() {
     
      $this->view->render('Страница с контактами');
   }
}

?>
