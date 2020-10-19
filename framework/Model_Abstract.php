<?php

abstract class Model_Abstract
{
	protected $cached_json = [];
	
	abstract public function getAll() : array;
	
	abstract public function getRecord(string $id) : array;
	
	public function loadData(string $fromFile) : array
	{
		$filename = basename($fromFile, '.json');
		if (!isset($this->cached_json[$filename]) || empty($this->cached_json[$filename])) 
		{
			$json_file=file_get_contents($fromFile);
			$this->cached_json[$filename] = json_decode($json_file, true);
		}
		return $this->cached_json[$filename];
	}
	
}