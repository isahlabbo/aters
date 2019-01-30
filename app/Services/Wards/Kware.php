<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Kware
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Bankanu/ R, Kade',
			'Basansan',
			'Durbawa',
			'G. Rugga',
			'G/ Modibbo/ G. Akwara',
			'H/ Ali/ Marabawa',
			'Kabanga',
			'Kware',
			'S/Birni/ G. Karma',
			'Tsaki/ Walake’e',
			'Tunga/ Mallamawa'
		];
	}
}

