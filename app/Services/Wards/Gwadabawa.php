<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Gwadabawa
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Asara Arewa',
			'Asara Kudu',
			'Atakwanyo',
			'Chimmola/Kudu',
			'Chimola Arewa',
			'Gidan Kaya',
			'Gigane',
			'Gwadabawa',
			'Huchi',
			'Mammande',
			'Salame'
		];
	}
}


