<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Gada
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Dukamaje/Ilah',
			'Gada',
			'Gilbadi',
			'Kadadin Buda (Kaddi)',
			'Kadassaka',
			'Kaddi',
			'Kaffe',
			'Kiri',
			'Kwarma',
			'Kyadawa/Holai',
			'Tsitse',
		];
	}
}

