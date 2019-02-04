<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Wurno
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Achida',
			'Alkammu/Gyelgyel',
			'Chacho/Marnona',
			'Dankemu',
			'Dimbiso',
			'Dinawa',
			'Kwargaba',
			'Kwasare/Sisawa',
			'Lahodu/G/Bango',
			'Magarya',
			'Marafa',
		];
	}
}

