<?php
namespace App\Services\PollingUnit\Kebbe;
	
	class Fakku
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'FAKKU SH.S/ FAKKU',
				'RAFIN KADE/ DUTSIN LERE PRY SCH',
				'SHAAL WASHI PRIMARY SCHOOL',
				'BASHI PRIMARY SCHOOL',
				'RARAH MAGAJI PRY SCH. (RARAH MAGAJI)',
				'RARAH PRIMARY SCHOOL',
				'RAFINGORA PRIMARY SCHOOL',
				'SADU, SADU PRIMARY SCHOOL',
				'RUWA FAKKU UNDER CHEDIYA (SHIYAR SARKIN RUWA, SS RUWA FAKKU)',
				'BINDANU PRY. SCH (BINDANU BINDANU D/HILI)',
				'BAKINDUTSI, BAKINDUTSI',
				'URU, URU DANHILI'
			];
		}
	}