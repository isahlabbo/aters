<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Rabah
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR MAJIKIRA ‐ A. RABAH',
				'SHIYAR MAJIKIRA ‐ B. RABAH',
				'RABAH LIBRARY (SHIYAR GALADIMA)',
				'SHIYAR RAFI ‐ RABAH',
				"GOV’T DAY SEC. SCHOOL (SHIYAR MAGAI 'A'RABAH)",
				'SHIYAR MAGAJI B RABAH',
				'KOGOGO HAKIMI',
				'JICCINI',
				'G.G.C RABAH',
				'KOKOGO DUTSE',
				'SABON GARI RABAH'
			];
		}
	}