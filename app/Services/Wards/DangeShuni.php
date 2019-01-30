<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class DangeShuni
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Bodai/Jurga',
			'Dange',
			'Fajaldu',
			'Giere/Gajara',
			'Rikina',
			'Rudu/Amanawa',
			'Ruggar Gidado',
			'Shuni',
			'Tsafanade',
			'Tuntube/Tsehe',
			'Wababe/Salau'
		];
	}
}
