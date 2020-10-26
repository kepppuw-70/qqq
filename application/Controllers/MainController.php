<?php
namespace Application\Controllers;
use Application\Core\Controller;
use Application\Lib\Db;
class MainController extends Controller
{      
	public function indexAction() {
      
      $result = $this->model->getUser();
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
