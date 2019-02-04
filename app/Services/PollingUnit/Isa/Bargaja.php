<?php
namespace App\Services\PollingUnit\Isa;
	
	class Bargaja
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BARGAJA, PRI. SCH.',
				'DAN FILI BARGAJA KIBIYA (BARGAJA SHIYAR KIBIYA)',
				'FAGE KASUWA (BARGAJA CHEDIYA)',
				'MODACI, FAGE',
				'D/ZANKE MAKARANTA',
				'LGEA PRI. SCH. MODACI SHIYAR HASSAN (MODACI SHIYAR HASSAN)',
				'LGEA PRI. SCH. LUGU (SHIYAR MAMMAN)',
				'GAZAU, MAKARANTA',
				'KALAGE, MAKARANTA',
				'D/ZANKE MAKARANTA'
			];
		}
	}