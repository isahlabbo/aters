<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Takatuku
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY. SCH. LULU RAF (S/HAKIMI,LULU RAFI I)',
				'SHIYAR HAKIMI, LULU RAFI II',
				'MODEL PRY SCH, TARATUKU',
				'SHIYAR HAKIMI, SHABON',
				'PRY. SCH. S/DIKKO (SHIYAR MAGAJI S/DIKKO)',
				'SHIYAR HAKIMI, K/GORUWA',
				'MODEL PRY SCH, D/MARERA',
				'PRY. SCH. GOBIRAWA (SHIYAR HAKIMI GOBIRAWA)',
				'PRY. SCH. RUGA BUSAU (SHIYAR HAKIMI RUGA BUSAU)',
				'SHIYAR HAKIMI, KULALO',
				'TASHA MILGOMA'
			];
		}
	}