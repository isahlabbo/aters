<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Riji_Maikujera
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRIMARY SCHOOL KUSAGA G.HAKIM (SHIYAR MAGAJI KUSAGA G. HAKIMI)',
				'PRIMARY SCHOOL (SHIYAR HAKIMI‐BAKIN KASUWA)',
				'PRIMARY SCHOOL SHIYARGAZA (SHIYAR BAZAI ‐ SHIYARGAZA)',
				'PRIMARY SCHOOL GIDAN MAIRAGO (GIDAN MAIRAGO ‐ MODEL PRI.SCHOOL)',
				'PRIMARY SCHOOL MADAMA (MARINAWA‐MODEL PRY SCH)',
				'PRIMARY SCHOOL (GUAN DANAYA‐DANFILI)'
			];
		}
	}