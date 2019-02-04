<?php
namespace App\Services\PollingUnit\Illela;
	
	class Darna
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DARNA SABON GARI, SHIYAR GALADIMA',
				'GIDAN TUDU, MAKARANTA',
				'TUNGAR ZANGO, MAKARANTA',
				'DARNA KILIYA, MAKARANTA',
				'TSIRA RAI, G./SALE',
				'HARAGAWA, MAKARANTA',
				'UNDER A TREE MULLELA (MULLELA)',
				'TUNGAR MATSI, S/SALAU',
				'UNDER A TREE GIDAN KWARE (GIDAN KWARE S/HAKIMI)',
				'UNDER A TREE TUNGAL DIYA (YUNGAR DIYA S/HAKIMI)',
				'DARNA KWANGO, S. HAKIMI',
				'GIDAN RABO, SHIYAR MAGAJI',
				'MAIMASU, MAIMASU',
				'GALADIMA GIDAN SALAU, SHIYAR HAKIMI',
				'GIDAN GWANYO, SHIYAR HAKIMI',
				'TUNGAR ZANGO, TUNGAR ZANGO'
			];
		}
	}