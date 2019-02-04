<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Gandi_B
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DANKARMAWA',
				'DANGAZRI ‐ M.P.S',
				'CHAKALTU PRIMARY SCHOOL (CHAKALTU)',
				'ALLIKIRU',
				'KURSA ‐ KRUSA',
				'BURWANGA ‐ BURWANGA',
				'TABANNI ‐ TABANNI',
				'DANKARMAWA ‐ M.P.S'
			];
		}
	}