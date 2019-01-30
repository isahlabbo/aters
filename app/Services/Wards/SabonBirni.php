<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class SabonBirni
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Gangara',
			'Gatawa',
			'Kalgo',
			'Kuruwa',
			'Lajinge',
			'Makuwana',
			'S/Birni East',
			'S/Birni West',
			'Tara',
			'Tsamaye',
			'Unguwar Lalle',
		];
	}
}

