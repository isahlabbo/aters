<?php
namespace App\Services\PollingUnit\Illela;
	
	class RGati
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'RUNGUMAWAR GATTI, MAKARANTA',
				'UNDER A TREE GIDAN HAMMA (GIDAN HAMMA)',
				'UNDER A TREE GIDAN KIRYA (GIDAN KIRYA)',
				'RUNGUMAWAR JAO, DANHILI',
				'LAKODA, KWAKWARA',
				'ZANGON LAKODA, KALGO',
				'LAFANI, MAKARANTA',
				'GIDAN CIWAKE MAKARATA',
				'TUDUN AYA , KWAKWARA',
				'IDIKI, MAKARANTA',
				'UNDER A TREE GIDAN DODO) (GIDAN DODO)',
				'RUNGUMAWAR GATTI, SHIYAR GALADIMA',
				'SABON GARIN HAMMA , HILI BABBA',
				'LAFANI AZAMAWA, GARKAR HAKIMI',
				'PRIMARY SCHOOL LAKODA (LAKODA LAKODA)'
			];
		}
	}