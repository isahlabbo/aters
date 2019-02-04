<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Tureta
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Barayar Giwa',
			'Duma',
			'Fura Girke',
			'Gidan Kare/Bimasa',
			'Kuruwa',
			'Kwarare',
			'Lambar Tureta',
			'Lofa',
			'Tsamiya',
			'Tureta Gari',
		];
	}
}
