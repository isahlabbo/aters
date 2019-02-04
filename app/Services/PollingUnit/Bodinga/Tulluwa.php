<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Tulluwa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DISPENSARY, TULLAWA',
				'SHIYAR KAKIMI, RUGGAR YANTU',
				'SHIYAR KAKIMI, RUGGAR JATAU I',
				'SHIYAR KAKIMI, RUGGAR JATAU II',
				'SHIYAR KAKIMI, GYASHARU',
				'DISPENSARY GIDAN TSARA (S/KAKIMI,GIDAN TSARA)',
				'PRY SCH, GIDAN TSARA',
				'PRY SCH. GIDAN RUWA (S/HAKIMI GIDAN RUWA)',
				'PRY SCH, BAGARUNNE',
				'PRY. SCH. KWALFA (HAYAN GIDANS/HAUMI KWALFA I)',
				'SHIYAR HAKIMI, KWALFA II',
				'DISPENSARY KULAFASA (S/HAKIMI KULAFASA I)',
				'SHIYAR HAKIMI, KULAFASA II',
				'PRY SCH, HAUSAWA',
				'DANFILI ALASAWA (SHIYAR HAKIMI HAUSAWA)',
				'SHIYAR HAKIMI, SAIDAWA',
				'PRY SCH, TULLUWA'
			];
		}
	}