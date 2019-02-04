<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class KwacciyarLalle
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'MODEL PRY SCH, KWACCIYAR LALLE',
				'SHIYAR HAKIMI, KUNKUMI',
				'SHIYAR HAKIMI, SABARA',
				'PRY SCH, D/DUGUZA',
				'SHIYAR HAKIMI, KAURA KASA',
				'PRY SCH, BUNAZAWA',
				'PRY SCH, ZANAGALAWA',
				'SHIYAR HAKIMI, RUNJI KWARA',
				'BAKIN MASALLACI, BAGALAWA',
				'SHIYAR HAKIMI, TSOMAU'
			];
		}
	}