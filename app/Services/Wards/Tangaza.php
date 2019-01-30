<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Tangaza
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Gidan Madi',
			'Kalanjeni',
			'Kwacce-Huru',
			'Magonho',
			'Raka',
			'Ruwa-Wuri',
			'Sakkwai',
			'Salewa',
			'Sutti',
			'Tangaza'
		];
	}
}

