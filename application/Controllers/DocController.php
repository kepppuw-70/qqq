<?php
namespace Application\Controllers;
use Application\Core\Controller;
class DocController extends Controller
{      
	public function documentsAction() {
       $this->view->render('Страница документы');
   }

   public function priceAction() {
       $this->view->render('Страница цены');
   }

}

?>
