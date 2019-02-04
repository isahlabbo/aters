<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Wamakko
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Arkilla',
			'Bado/Kasarawa',
			'Dundaye/Gumburawa',
			'G/Bubu/G/Yaro',
			'G/Hamidu/G/Kaya',
			'Gumbi/Wajake',
			'Gwamatse',
			'K/Kimba/Gedewa',
			'Kalambaina/Girabshi',
			'Kammata',
			'Wamakko',
		];
	}
}

