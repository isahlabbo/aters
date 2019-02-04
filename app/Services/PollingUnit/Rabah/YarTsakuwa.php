<?php
namespace App\Services\PollingUnit\Rabah;
	
	class YarTsakuwa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR UBANDAWAKI',
				'SHIYAR AJIYA MPS (SHIYAR AJIYA)',
				'J.S.S. SABON GARI (SABON GARI)',
				'SABON GARI ‐ M.P.S II',
				'BADAMMA',
				'TSAMAWA PRIMARY SCHOOL (TSAMAWA)',
				'SANGIWA M.P.S',
				'JIGARA',
				'RAHAH ‐ RAHAH',
				'DANBANDA',
				'SIDINGO ‐ SIDINGO'
			];
		}
	}