<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Fajaldu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'MODEL PRY SCH, BUDUDE',
				'MODEL PRY SCH, DABAGI',
				'RUGGAR KURA/ MODEL PRIMARY SCHOOL RUGAR KURA (GONAR YARI/ASARARA)',
				'TUDU/ MODEL PRIMARY SCHOOL TUDU (TUDU)',
				'WARAMU/ASARARA/KUSA DAKOFAR MAL. AMINU (BAYAN GIDAN MAI GARI)',
				'GIDAN GIYE/ MODEL PRIMARY SCHOOL GIDAN/GIYE (GIDAN GIYE)',
				'FILIN INWALA',
				'FAJALDU M.P.S.',
				'MODEL PRY SCH, BISSALAM / FILIN INWALA',
				'GONAR YARI, BISSALAM/WARAMU'
			];
		}
	}