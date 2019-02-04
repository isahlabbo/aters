<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kaddi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ISLMIYYA (KADDI SH.MAGAJI)',
				'KADDI SABON GARI',
				'GIDAN ILLO, SHIYAR MAGAJI',
				'KWARMA ALKALI, PRY SCH',
				'GIDAN GADO I',
				'GIDAN BAGIRBI, SHIYAR MAGAJI',
				'GIDAN DAN YARO, SHIYAR MAGAJI',
				'GIDAN GADABO PRI. SCH.',
				'TSURURU MADUGU, SHIYAR MAGAJI',
				'ISLAMIYYA SCH. (KADDI TUDU SHIYAR MAGAJI)',
				'GIDAN JATAU, SHIYAR MAGAJI',
				'GADABO PRY SCH',
				'GIDAN GYADO, PRY SCH. II',
				'SHIYAR MAGAJ PRIMARY SCHOOL (GIDAN UBANDOMA SHIYAR MAGAJI)',
				'GADABO, PRY SCH GADABO'
			];
		}
	}