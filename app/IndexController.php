<?php
class IndexController extends Controller_Abstract
{

	
	public function run()
	{
		$this->setModel(new IndexModel()); //Change both methods
		$this->setView(new IndexView);
		
		$this->model->attach($this->view);
		
		//depending on what is needed
		$this->model->getAll();
		
		
		// tell model to contact its observers
		$this->model->notify();
	}
}
