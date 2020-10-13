<?php

use PHPUnit\Framework\TestCase;

class ObservableModelTest
{
	public function modelObjectCreatedTest()
	{
		
	}
	
	public function checkObserverableDetachTest()
	{	
		
	}
	
	public function checkObserverableAttachTest()
	{
		
	}
	
	public function getAllRecordsTest()
	{
		$model = new ObservableModel();
		$json = $model->getAll();
		$this->assertCount(1, $json[0]);
	}
	
	public function getRecordTest()
	{
		
	}
}