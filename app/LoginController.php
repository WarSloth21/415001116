<?php
class LoginController extends Controller_Abstract
{
	public function run()
	{
		$v = new View();
		$v->setTemplate(TPL_DIR . '/login.tpl.php');
		
		
		//Set Model and View
		$this->setModel(new LoginModel());
		$this->setView($v);
		
		$this->model->attach($this->view);
		//depending on what is needed
		$data = $this->model->getAll();
		//Tells MOdel to update the changed data
		$this->model->updateThechangedData($data);
		
		// tell model to contact its observers
		$this->model->notify();
	}
}