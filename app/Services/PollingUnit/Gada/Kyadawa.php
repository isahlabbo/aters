<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kyadawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ADULT EDUCATION SCHOOL (SHIYAR GAZAWUR)',
				'PRY. SCH. GALADIMA (SHIYAR DAN GALADIMA)',
				'KALABA',
				'JATTALAWA',
				'DANBIREMA',
				'GUBETAWA, PRY SCH',
				'SAMARIN MARAKE',
				'WAURU SHIYAR MAGAJI',
				'WAURU SHIYAR MANO',
				'WAURU MAKABA',
				'HOLAI KANWURI',
				'HOLAI TABKI',
				'BUJAGA, PRY SCH',
				'GIDAN MAIKAMBA, PRY SCH',
				'GIDAN AMAMATA, PRY SCH',
				'GIDAN BAWA KOFATO, SHIYAR HAKIMI',
				'GIDAN DAN KASA',
				'ZANGON AJALLO',
				'DUNKULAWA, PRY SCH',
				'HOLAI BUZAYE, PRY SCH',
				'BUNYAGADI, PRY SCH',
				'HOLAI SABON GAR',
				'GIDAN JATTAL',
				'WAURU N.P.S',
				'GIDAN KARA'
			];
		}
	}