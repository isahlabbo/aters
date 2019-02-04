<?php
namespace App\Services\PollingUnit\Isa;
	
	class Tidibale
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				"LGEA PRI. SCH. KALKA'IRU (KALKA'IRU)",
				'LGEA PRI. SCH. CHOHIMAYAL (CHOHIMAYAL)',
				'LGEA PRI. SCH. GIDAN SALE (GIDAN SALE)',
				'LGEA PRI. SCH. SALAMAWA (SALAMAWA)',
				'LGEA PRI SCH. TIDIBALE (TIDIBALE SHIYAR SARKIN NOMA)',
				'LGEA PRI SCH. SHIYAR ARAWA (SHIYAR ARAWA)',
				'LGEA PRI. SCH. GAMAROJI (GAMAROJI)',
				'LGEA PRI. SCH. JIMBAMA (JIMBAMA)',
				'LGEA PRI. SCH. GIDAN MAIKWANO (GIDAN MAI KWANO)',
				'LGEA PRI. SCH. DANGULBI (DANGULBI)',
				'TIDIBALE DISPENSARY (TIDIBALE SHIYAR SARKIN NOMA)',
				'LGEA PRI. SCH. SHIYAR ARAWA (SHIYAR AREWA)'
			];
		}
	}