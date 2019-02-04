<?php
namespace App\Services\PollingUnit\Isa;
	
	class Gebe_A
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'GEBE MAKARANTA',
				'LGEA PRI. SCH. GIDAN BAWA (GIDAN BAWA)',
				'LGEA PRI. SCH. DAN GWADI (S/GARIN DAN GWADI)',
				'KAMARAWA, MAKARANTA',
				'LGEA PRI SCH. KAMARAWA KANWURI (KAMARAWA KANWURI)',
				'LGEA PRI. SCH. GARIN FADAMA',
				'MANAWA/MAKARANTA',
				'KAGARA/GEBE, MAKARANTA',
				'FILIN KASUWA (GEBE KANWURI)',
				'LGEA PRI. SCH. MANAWA G/TUDU (G/TUDU MANAWA)'
			];
		}
	}