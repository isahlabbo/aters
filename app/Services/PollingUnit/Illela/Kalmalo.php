<?php
namespace App\Services\PollingUnit\Illela;
	
	class Kalmalo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR GALADIMA, ASIBITI',
				'UNDER A TREE S/MAMMAN ALA (SHIYAR GALADIMA S. MAMMAN ALA)',
				'UNDER A TREE S/WADATA (SHIYAR RAFI S/WADATA)',
				'UNDER A TREE SHIYAR AJIYA (SHIYAR AJIYA, S. AJIYA)',
				'RUNDJIN KUWARE, MAKARANTA',
				'JEMA, S/MAGAJI',
				'TUMBULUNKUM, BABBAN HILI',
				'MUNWADATA, MAKARANTA',
				'RUNJINTUDU, MAKARANTA',
				'SABON GARI MAKARANTA',
				'UNDER A TREE TABKIN TARAMNIYA (TAFKIN TARAMNIYA S/ALFAMMA)',
				'UNDER A TREE S/KALMALO (SHIYAR DAN GALADIMA S/KELUATO)'
			];
		}
	}