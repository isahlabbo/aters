<?php
namespace App\Services\PollingUnit\Isa;
	
	class Gebe_B
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BAFARAWA MAKARANTA',
				'FILIN KASUWA ARUME YARKASUWA (ARUME YARKASUWA)',
				'DAN FILI KOWA (KOWA IKO BAFARAWA)',
				'LGEA PRI. SCH. ARUME GIDAN MOYI (ARUME G/MOYI)',
				'LGEA PRI. SCH. DANGURMU (DANGURMU)',
				'LGEA PRI. SCH. TUNGAN GALADIMA (TUNGAN GALADIMA)',
				'LGEA PRI. SCH. TUGAR DANZANKE (TUGAR DANZANKE)',
				'FILI KOWA IKO BAFARAWA (KOWA IKO BAFARAWA)',
				'SURUDUBU, MAKARANTA',
				'DAN FILI ARUME YAR KASUWA (ARUME YAR KASUWA)'
			];
		}
	}