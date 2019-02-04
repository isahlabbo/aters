<?php
namespace App\Services\PollingUnit\Illela;
	
	class Araba
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR KATUNE, HILI BABBA',
				'SHIYAR GALADIMA, HILIN TUDU',
				'SHIYAR KATUNE, TSAMIYA',
				'BAKIN DUTSI, HILI BABBA',
				'GIDAN KAMIL, G/MALAM TUNAU',
				'UNDER A TREE HURA (HURA GIDAN MAGAJI)',
				'DANBOKA, GIDAN TUDU',
				'ZANGO ALKASON, GIDA MAGAJI',
				'DANGO S. MAGAJI, HILI',
				'DANGO S/JIBO, KWAKWARA',
				'SH/KATUNE ARABA MAKARANTA',
				'BAKIN DUTSI, MAKARANTA',
				'DAN BOKA, MAKARANTA'
			];
		}
	}