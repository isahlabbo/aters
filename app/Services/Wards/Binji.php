<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Binji
{
	
	function __construct()
	{
		$this->wards();
	}

	public function wards()
	{
		return [
            'Binji',
			'Bunkari',
			'Gawazzai',
			'Inname',
			'Jammali', 
			'Maikulki', 
			'Samama', 
			'Soro Gabas', 
			'Soro Yamma', 
			'T/Kose',
		];
	}
}
 