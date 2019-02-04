<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Girkau
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'IFAD OFFICE GIRKAU (GARKAU S. GALADIMA)',
				'MAZOJI, MAZOJI PRY SCH',
				'GIRKAU PRY. SCH. (GIRKAU SHIYAR TUDU)',
				'DISPENSARY ZUGU (ZUGUN KEBBE S/HAKIMI)',
				'M.P.S PRY SCH. II GIRKAU (GIRKAU SH GALADIMA)',
				'GIDAN GARSO, TASHAR KALGO',
				'SABON GARI ZUGOU PRY SCH',
				'ZUGUN KEBBE, ZUGUN KEBBE PRY SCH',
				'JABGA, JABGA PRY SCH',
				'INDIRE, SHIYAR HAKIMI',
				'TUGAR KABAWA, DAN GARKAR BOKA'
			];
		}
	}