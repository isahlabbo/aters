<?php
/**
* this class will return wards of the local government
*/
namespace App\Services\Wards;

class Tambuwal
{
	
	function __construct()
	{
		$this->wards = $this->wards();
	}

	public function wards()
	{
		return [
            'Bagida/Lukkingo',
			'Bakaya/Sabon Birni',
			'Barkeji/Nabaguda',
			'Bashire/Maikada',
			'Dogondaji/Sala',
			'Faga/Alasan',
			'Jabo/Kagara',
			'Romon Sarki',
			'Saida/Goshe',
			'Sanyinna',
			'Tambuwal/Shinfiri'
		];
	}
}

