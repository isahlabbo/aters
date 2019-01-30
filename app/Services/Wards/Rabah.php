<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Rabah
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Gandi ‘A’',
			'Gandi ‘B’',
			'Gawakuke',
			'Gwaddodi/Gidan Bu Wai',
			'Kurya',
			'Rabah',
			'Rara',
			'Riji/Maikujera',
			'Tsamiya',
			'Tursa',
			'Yar Tsakuwa'
		];
	}
}


