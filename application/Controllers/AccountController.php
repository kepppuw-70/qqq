<?php
namespace Application\Controllers;
use Application\Core\Controller;
class AccountController extends Controller
{      
	 public function registerAction() {
	 	$account = $this->model->setUser();	 	
	 	$this->view->render('Регистрация');
   }

   public function aboutAction() {
       $this->view->render('Про меня');
   }
}

?>
