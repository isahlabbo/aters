<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Giere
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'MODEL PRY SCH, GIERE',
				'RIYOJIN FARU/DANFILI R/FARU (RIYOJIN FARU)',
				'DANBASAMU/DANFILI DANBASAWA (DANBASAWA)',
				'HETERETE',
				'DANFILI TSAHA KWAKWARA (AKALI)',
				'DANFILI BAKIN TSAHA TSAMIYAR GABAS (SIDINGU)',
				'DABAGI MPS',
				'BIRKITAWA/DANFILI BIRKITAWA (BIRKITAWA)',
				'HUNKUI',
				'SABADAWA/GARKAR SU NAIABU TUSHEN LIM (SABADAWA)',
				'GAJARA',
				'ZANFARAWA/TUSHIU LIM HANYAR GONA (ZAMFARAWA)',
				'MAJIYAR BARAYA',
				'DABAGI/MODEL PRIMARY SCHOOL DABAGI (KANWURI)',
				'DAMARI',
				'GEBEN DAMU'
			];
		}
	}