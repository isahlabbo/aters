<?php
namespace App\Services\PollingUnit\Kware;
	
	class G_Rugga
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRI. SCHOOL GIDAN RUGGA (GIDAN RUGGA SHIYAR HAKIMI)',
				'RUGGAR LIMAN, SHIYAR HAKIMI I',
				'RUGGAR LIMAN, SHIYAR HAKIMI II',
				'RUNJIN TSAMIYA, SHIYAR HAKIMI',
				'GANDU, PRI. SCH.',
				'MORE, PRI. SCH. I',
				'MORE, PRI. SCH. II'
			];
		}
	}