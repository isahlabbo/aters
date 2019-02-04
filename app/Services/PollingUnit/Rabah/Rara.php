<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Rara
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR YAMMA ‐ MODEL PRI.SCHOOL',
				'SHIYAR YAMMA ‐ SH/GALADIMA',
				'MODEL PRIMARY SCHOOL, RARA (SHIYAR MARAFA‐ADULT EDU)',
				'MODEL PRIMARY SCHOOL, RARA (SHIYAR MALLAMAWA ‐ SH/M)',
				'MADAWA ‐ P/SCH',
				'CHIRIB DIKKO ‐ MODEL PRI.SCHOOL',
				'TUKKUYUM ‐ M.P.S',
				'DAWAKAWA ‐ MODEL PRI.SCHOOL',
				'YOLA BOGAYE ‐ YOLA',
				'DUDU/BARADE ‐ M.P.S',
				'SABON GARI'
			];
		}
	}