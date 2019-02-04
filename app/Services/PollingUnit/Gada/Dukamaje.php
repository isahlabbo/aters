<?php
namespace App\Services\PollingUnit\Gada;
	
	class Dukamaje
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ILAH GARI, ILAH PRY SCH',
				'TABANNI, PRY SCH',
				'G/FAKO',
				'TSUGA BABBA',
				'GIDAN BAKO',
				'D/MAJE YAMMA',
				'GIDAN BUTA',
				'DOGON DAJI FARU',
				'GIDAN KUKA, PRY SCH',
				'GIDAN RAI RAI',
				'GIDAN ALBAKARI',
				'GIDAN RABAMI',
				'RABAMAWA / DANFILI',
				'GIDAN JADA, SHIYAR HAKIMI',
				'GIDAN BARMU, SHIYAR HAKIMI',
				'GIDAN TADIYA, SHIYAR HAKIMI',
				'DUKA MAJE GABAS',
				'JANGARGARI, SHIYAR MAGAJI',
				'BANBARO, SHIYAR MAGAJI',
				'DANFILI (TABANNI PRY SCH)'
			];
		}
	}