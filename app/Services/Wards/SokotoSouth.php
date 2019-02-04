<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class SokotoSouth
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Gagi ‘A’',
			'Gagi ‘B’',
			'Gagi ‘C’',
			'R/Dorowa ‘A’',
			'R/Dorowa ‘B’',
			'S/A/K/Atiku',
			'S/Zamfara ‘A’',
			'S/Zamfara ‘B’',
			'Sarkin Adar Kwanni',
			'T/Wada ‘A’',
			'T/Wada ‘B’'
		];
	}
}

