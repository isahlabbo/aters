<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Silame
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
			'Gande East',
			'Gande West',
			'Katami North',
			'Katami South',
			'Kubodu North',
			'Kubodu South',
			'Labani',
			'Marafa East',
			'Marafa West',
			'Silame'
		];
	}
}


