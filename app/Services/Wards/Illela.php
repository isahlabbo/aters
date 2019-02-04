<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Illela
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Araba',
			'Damba',
			'Darna/ Sabon Gari',
			'Darne/ Tsolawo',
			'G/ Hamma',
			'G/ Katta',
			'Garu',
			'Illela',
			'Kalmalo',
			'R. Gati',
			'Tozai'
		];
	}
}

