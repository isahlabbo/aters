<?php
namespace App\Services\PollingUnit\Binji;
	
	class Gawazzi
	{
		
		function __construct()
		{
			
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRI. SCH. GAWAZZAI (GAWAZZAI)',
				'PRI. SCH. BANI ZUMBU (BANI ZUMBU)',
				'PRI. SCH. DUNKUMA (DUNKUMA)',
				'PRI. SCH YARDEWU (YARDEWU)',
				'PRI. SCH. MATABARE (MATABARE)',
				'PRI. SCH. GAWAZZAI (GAWAZZAI DAN FILI)'
			];
		}
	}