<?php
namespace App\Services\PollingUnit\Gudu;
	
	class KarfenSarki
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ASIBITIN GARI, KARFEN SARKI',
				'TOWN PRY SCH, KARFEN SARKI',
				'DAN FILI, FILASKO',
				'DAN FILI, HUDAR MARKE',
				'DAN FILI, TAURA MATA',
				'KARFEN SARKI DAN FILI KARFEN SARKI',
				'FILASKO‐DAN FILI'
			];
		}
	}