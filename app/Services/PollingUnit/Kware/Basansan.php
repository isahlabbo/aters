<?php
namespace App\Services\PollingUnit\Kware;
	
	class Basansan
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'UNDER TREE BASANSAN (BASANANSAN S/HAKIMI)',
				'BASANSAN BASANSA PRI. SCH.',
				'MODAWA, SHIYAR HAKIMI',
				'GIDANMUTUNE, SHIYAR HAKIMI',
				'LEMI, PRI. SCH.',
				'TAINO, PRI. SCH.',
				'RUNBUKI, SHIYAR HAKIMI',
				'SIRE DANDORO, SHIYAR HAKIMI',
				'GIDAN AIKI, SHIYAR HAKIMI'
			];
		}
	}