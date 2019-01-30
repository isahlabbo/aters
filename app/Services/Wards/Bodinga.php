<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Bodinga
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
			'Badau/Darhela',
			'Bagarawa',
			'Bodinga/Tauma',
			'Danchadi',
			'Dingyadi/Badawa',
			'Kwacciyar Lalle',
			'Mazan Gari/Jirga Miyo',
			'Sifawa/Lukuyawa',
			'Takatuku/Madorawa',
			'Tulluwa/Kulafasa',
		];
	}
}
