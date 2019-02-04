<?php
namespace App\Services\PollingUnit\Binji;
	
	class Binji
	{
		
		function __construct()
		{
			$this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ALIYU JODI MPS (SHIYAR S/PAWA)',
				'AREA DEV. OFFICE BAJAGAWA (BAJAGAWA)',
				'ALIYU JODI MPS (S/DARAI PRI, SCH)',
				'GOVT. TECH. COLLEGE, BINJI (S/DARAI GOVT. TECH. COLL)',
				'VET. CLINIC DAWAKI (SHIYAR UBANDAWAKI)',
				'S. YAKI MPS (FILIN BADE',
				'ALIYI JODI MPS (S/SARKIN ASKI)',
				'AREA DEV. OFFICE FAWA (S/SARKIN FAWA)',
				'S. YAKI MPS (S/FAWA DAN FILI)'
				
			];
		}
	}