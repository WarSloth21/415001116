<?php

abstract class Model_Abstract
{
	abstract public function getAll() : array;
	
	abstract public functiongetRecord(string $id) : array;
	
	public function loadData(array $data)
	{
		// Read JSON File
		$data = file_get_contents(./data/);
		
		// Decode Files
		$data_data = json_decode($data, true);
		
	}
	
}