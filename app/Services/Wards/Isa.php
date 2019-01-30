<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Isa
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Bargaja',
			'Gebe ‘A’',
			'Gebe ‘B’',
			'Isa North',
			'Isa South',
			'Tidibale',
			'Tozai',
			'Tsabren Sarkin Darai',
			'Turba',
			'Yanfako'
		];
	}
}


