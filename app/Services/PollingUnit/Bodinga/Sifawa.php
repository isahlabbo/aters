<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Sifawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, SHIYAR KUDU I',
				'PRY SCH, SHIYAR KUDU II',
				'SHIYAR HAKIMI, SHIYAR KUDU',
				"JAM'ATU NASARAL ISLAM, SHIYAR AREWA",
				'ADULT ED NASARAL ISLAM, SHIYAR AREWA',
				'COURT AREA , SHIYAR AREWA',
				'PRY SCH, ABDULSALAMI',
				'PRI. SCH LOZOBE/DABAGI',
				'GIDAN RUGGA, SHIYAR YAMMA I',
				'SHIYAR HAKIMI, ABDULSALAMI II',
				'SHIYAR HAKIMI, ABDULSALAMI',
				'SHIYAR HAKIMI, GIDAN ABBA',
				'SHIYAR HAKIMI, HARUMI/FADAMA/ HURUMI FADAMA SH/HAKIMI',
				'PRY SCH, LURUYAWA',
				'SHIYAR MAIDABO, GIDAN SAMI',
				'SHIYAR HAKIMI, YARAREWA'
			];
		}
	}