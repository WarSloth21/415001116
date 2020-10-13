<?php

class View implements Observer_Interface
{
	private $tpl = '';
	private $data = [];
	
	public function setTemplate(string $filename)
	{
		$this->tpl = $filename;
	}
	
	public function display()
	{
		echo $this->tpl;
	}
	
	
	public function addVar(string $name, $value)
	{
		$this->data[$name] = $value;
	}
	
	public function update(Observable_Model $obs)
	{
		$re
	}
	
}