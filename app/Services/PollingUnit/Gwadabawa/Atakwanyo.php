<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Atakwanyo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, ATAKWANYO',
				'SHIYAR MASALLAU, ATAKWANYO',
				'PRY SCH, WAZI BASA',
				'PRIMARY SCHOOL TASHAR GAWO, (TASHAR GAWO ATTAKWANYO GUSAU)',
				'PRY SCH, BURDI',
				'KANGIYEN DAN INNA, KANGIYEN DAN INNA',
				'PRIMARY SCHOOL KANGIYEN T/GIWA (SH. HAKIMI KUNGIYEN T/GIWA)',
				'DAN FILI, OPEN SPACE (KATALAR DUTSI, KATALAR DUTSI)',
				'PRIMARY SCHOOL KATTALAR KAURA (KATALAR KAURA, KAT., KAURA)',
				'KAN WURI (ABO KIRE)',
				'CHOBAL PRI. SCH.',
				'PRI. SCH. GIDAN MAGAJI WAZARI',
				'GWARGWA PRY SCH, GWARAGWA'
			];
		}
	}