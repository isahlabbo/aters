<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Shagari
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Dandin Mahe',
			'Gangam',
			'Horo Birni',
			'Jaredi',
			'Kajiji',
			'Kambama',
			'Lambara',
			'Mandera',
			'Sanyinnawal',
			'Shagari'
		];
	}
}

