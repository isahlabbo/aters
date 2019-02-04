<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Goronyo
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Birjingo',
			'Boyekai',
			'Giyawa',
			'Goronyo',
			'Kagara',
			'Kojiyo',
			'Kwakwazo',
			'Rimawa',
			'S/Gari Dole/Dan/Tasakko',
			'Shinaka',
			'Takakume'
		];
	}
}
