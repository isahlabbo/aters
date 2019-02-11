<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Badagarawa
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'MODEL PRY SCH, SHIYAR MANU',
				'SHIYAR HAKIMI, GUGARI',
				'PRY SCH, R/YARDE',
				'SHIYAR HARIMI, R/GARBA',
				'SHIYAR HARIMI, MALLAWA',
				'PRY SCH, BENGEL',
				'SHIYAR HAKIMI, SAULANA',
				'DISPENSARY, BAGARAWA'
			];
		}
	}