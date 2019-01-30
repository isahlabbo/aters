<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Gudu
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Awulkiti',
			'Bachaka',
			'Balle',
			'Chilas/Makuya',
			'Gwazange/Boto',
			'Karfen Chana',
			'Karfen Sarki',
			'Kurdula',
			'Maraken Bori',
			'Tulun Doya'
		];
	}
}

