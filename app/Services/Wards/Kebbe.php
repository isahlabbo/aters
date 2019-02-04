<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Kebbe
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Fakku',
			'Girkau',
			'Kebbe East',
			'Kebbe West',
			'Kuchi',
			'Margai – A',
			'Margai – B',
			'Nasagudu',
			'Sangi',
			'Ungushi',
		];
	}
}

