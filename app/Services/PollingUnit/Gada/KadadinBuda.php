<?php
namespace App\Services\PollingUnit\Gada;
	
	class KadadinBuda
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KADADIN BUDA, DISPENSARY',
				'KADADIN BUDA, PRY SCH K/B',
				'GIDAN GAINA, PRY SCH G.GAINA',
				'RAFINDUMA, PRY SCH RD',
				'RAFINDUMA, SHIYAR MAGAJI',
				'GIDAN SALAU, PRY SCH SALAU',
				'INGABORO, PRY SCH',
				'SABON GARI GIDAN ARZIKA, PRY SCH',
				'KADADIN MAIDABO, PRY SCH',
				'KAGA DANFILI',
				'TANTARKWAI, PRY SCH',
				'SAGERAR DIKKO, DAN FILI',
				'SAGERAR ANGO, DAN FILI',
				'TUFFAL ALIYU, DAN FILI',
				'GIDAN KWANI, TASHA',
				'INGABORO, PRY SCH',
				'IDDARAWA, DAN FILI',
				'TUFFAL BABA, DAN FILI',
				'GIDANZAFI, DAN FILI',
				'RAFINDUMA, PRY SCH',
				'SAGERAR DIKKO, DAN FILI'
			];
		}
	}