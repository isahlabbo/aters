<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Yabo
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
            'Bakale',
			'Bingaje',
			'Binji',
			'Birniruwa',
			'Fakka',
			'Kilgori',
			'Ruggar Iya',
			'Torankawa',
			'Yabo ‘A’',
			'Yabo ‘B’'
		];
	}
}

