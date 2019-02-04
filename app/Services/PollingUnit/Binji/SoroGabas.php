<?php
namespace App\Services\PollingUnit\Binji;
	
	class SoroGabas
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRI. SCH. SORON GABAS (SORO GARKAR HAKIMI)',
				'MODEL PRY SCH, SORO',
				'GOHITTO, PRIMARY SCHOOL',
				'ISLAMIYA SCH. GOHITTO (GOHOTTO SHIYAR KANE)',
				'FAKO PRY SCH',
				'TUMUNI MAGAJ',
				'TUMUNI MAIYAKI, MAIYAKI PRI SCH',
				'KANDEZA PRI. SCHOOL',
				'JAMBOMA PRI. SCH. (JAMBOMA MAGAJI)'
			];
		}
	}