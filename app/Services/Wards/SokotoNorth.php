<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class SokotoNorth
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
             'Magajin Gari ‘A’',
			'Magajin Gari B',
			'Magajin Rafi ‘A’',
			'Magajin Rafi ‘B’',
			'S/Adar Gandu',
			'S/Adar/G/Igwai',
			'S/Musulmi ‘A’',
			'S/Musulmi ‘B’',
			'Waziri ‘A’',
			'Waziri ‘B’',
			'Waziri ‘C’'
		];
	}
}

