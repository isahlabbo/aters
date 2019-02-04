<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Nasagudu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'NASAGUDU, NASAGUDU PRY SCH',
				'TUNGAR MAJE, PRY SCH',
				'KWANTA GINDIN ITACIYA (KWANTA GARKAR M. BAYERO)',
				'BOMNA, BOMNA PRY SCH',
				'GARIN MUSA, PRY SCH',
				'GARIN KOFA, GARIN KOFA',
				'KUNDUTTU, PRY SCH',
				'DUTSIN KUKA, PRY SCH',
				'TUNGAR LABBO',
				'KAWARA GIDIN ITACIYA (KAWARA GARKAR MARAFA)',
				'DAN HILI NEAR WATER TANK (SH GANDU, D/HILI)',
				'SHIYAN GANDU,KUCHI, KAIWA AYI',
				'MATATAR ISKA, KUCHI (SH GANDU GARKAR ALH. BELLO)'
			];
		}
	}