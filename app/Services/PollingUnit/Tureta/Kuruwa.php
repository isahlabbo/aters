<?php

namespace App\Services\Tureta
/**
* this class will return all polling units of the class
*/
class Kuruwa
{
	
	function __construct()
	{
		$this->pollingUnits()
	}

	protected function pollingUnits()
	{
		return [
			'KURUWA ‐ PRI.SCHOOL',
			'KAWARA ‐ KAWARA',
			'GALADUMMAI ‐ GALADUMMAI',
			'GIDAN BISHIYA GARKAR HAKIMI (ACHA A SHA RUWA)'
		];
	}
}
