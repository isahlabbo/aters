<?php
namespace App\Services\PollingUnit\Kware;
	
	class Kabanga
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KABANGA, PRI. SCH.',
				'ZANGO JAGABA, SHIYAR HAKIMI',
				'GEBEN DAMU, SHIYAR HAKIMI',
				'GWARGAL, SHIYAR HAKIMI',
				'KAGARA MASU, PRI. SCH.',
				'FADA WALKI, SHIYAR HAKIMI',
				'KADABA, SHIYAR HAKIMI',
				'GURADA BAZO, SHIYAR HAKIMI',
				'KARDIDAYE, SHIYAR HAKIMI',
				'TSARIKI, SHIYAR HAKIMI',
				'KARDIDAYE, SHIYAR HAKIMI'
			];
		}
	}