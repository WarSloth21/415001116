<?php

abstract class Observable_Model extends Model_Abstract implements Observable_Interface
{
	protected $observers = [];
	protected $updatedData =[];
	
	public function attach(Observer_Interface $o)
	{
		$this->observers = $o;
	}
	
	public function detach(Observable_Interface $o)
	{
		$this->observers = array_filter($this->observers, function ($a) use ($o) {
															return (! ($a == $o));
															});
	}
	
	public function notify()
	{
		foreach ($this->observers as $ob) {
			$ob->update($this);
		}
	}
	
	/**
	*Used to pass the data that was changed
	*/
	
	public function giveUpdate()
	{
		return $this->updatedData;
	}
	
	abstract public function getAll() : array;
	
	
	abstract public function getRecord(string $id) : array;
	
	
	
}