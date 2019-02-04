<?php
namespace App\Services\PollingUnit\Gwadabawa;
	
	class Chimmola
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH MODEL MAIWADA',
				'SHIYAR SARKIN YARI, S. YAKI I',
				'SHIYAR MAGAJI, SHIYAR MAGAJI',
				'DAN LABAU MASAKA SHANU (SHIYAR SIKOLA, SH HAUSAWA)',
				'PRIMARY SCHOOL KABARA (SHIYAR HAKIMI, SH KAGARA)',
				'MAHAUTA, UNDER TREE SHADE (ADARAWA, SHIYAR HAKIMI HASHI)',
				'SHIYAR HAKIMI, LUKUWA',
				'SHIYAR SAIDU, SHIYAR SAIDU LUKUWA',
				'PRIMARY SCHOOL, KWANKWAN BILO (SHIYAR HAKIMI T. TUDU KWANKWAN BALI.)',
				'OPP. MOSQUE, NEAR WELL (BUZALEGA SH, BUZALEGA)',
				'PRIMARY SCHOOL, KWAKWAN BILO (SHIYAR HAKIMI , KWAKWANGO)',
				'SHIYAR II YAKO'
			];
		}
	}