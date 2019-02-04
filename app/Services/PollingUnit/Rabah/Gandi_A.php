<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gandi_A
	{
		
		function __construct()
		{
			
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				"SHIYAR SARADUNA 'A' M P.S",
				"SHIYAR SARADUNA 'B'",
				'SHIYAR DAN KADU',
				'SHIYAR AJIYA MPS (SHIYAR AJIYA)',
				'SHIYAR GALADIMA',
				"BA’AKALE OLD COURT (SHIYAR BAAKALE)",
				'SHIYAR DANDUBE',
				'J.N.I. DABAWA (DABAWA)',
				'G.S.S. GANDI (DANDUBBAL)',
				'MAKERA',
				'SHIYAR ZAMAWA',
				'TAFAWA AJLIA',
				'RUWAN TSAMIYA',
				'WARWANNA',
				'ILULU',
				'GIDAN KARE',
				'TAFARA YAN RUWA ‐ P.S'
			];
		}
	}