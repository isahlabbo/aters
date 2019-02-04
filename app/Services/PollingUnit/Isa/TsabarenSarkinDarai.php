<?php
namespace App\Services\PollingUnit\Isa;
	
	class TsabarenSarkinDarai
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'LGEA PRI. SCH. ADARAWA (ADARAWA)',
				'GIDAN DIKKO, PRI. SCH.',
				'LGEA PRI. SCH TUNTUBE (TUNTUBE)',
				'TSABREN SARKIN DARAI, DISPENSARY',
				'TSABREN ALTINE, PRI. SCH.',
				'GIRNASHE, PRI. SCH.',
				'FILIN KASUWA GIRNASHE (GIRNNASHE SABON GARI)',
				'GIDAN ABDULKARIM, PRI. SCH.',
				'LGEA PRI. SCH. KUKAR NADADA (KUKAR NADADA SHIYAR MAI GARI)',
				'RIJIYAR MALAN LADAN, PRI. SCH.',
				'TSABREN SARKIN DARAI, DISPENSARY'
			];
		}
	}