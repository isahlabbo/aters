<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Dingyadi
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, SHIYAR DANGALADIMA',
				'NIZZAMIYA, SHIYAR DANGALADIMA',
				'DISPENSARY, SHIYAR MAGAJI',
				'SHIYAR RAFI, SHIYAR RAFI',
				'KAURA BUBA PRY SCH',
				'KAURA BUBA',
				'PRY SCH, GIDAN KOKANI',
				'PRY SCH, GIDAN KIJJO',
				"FILIN KASUWA JAGWANAWA (S.MAGAJI, GIDAN KIJJO)",
				'DISPENSARY, BADAWA',
				'PRY SCH, GARBA‐GARBA',
				'SHIYAR MAGAJI, RAHA',
				"PRY. SCH. HAMIDAWA (S/ MAGAJI, HAMIDAWA)",
				'PRY SCH, RAHA',
				'DANFILI,RUNJI AUDU'
			];
		}
	}

