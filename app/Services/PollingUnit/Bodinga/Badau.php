<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Badau
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, DARHELA',
				'LUNGUN DARHELA P.S',
				'HILIN, DARHELA KAURA',
				'KWARWARA, DARHELA KAURA',
				'BADAU SH. FULANI SH/ HAKIMI',
				'BADAU SH DANGIWA SH/HAKIMI',
				'MAKARANTA DARHELA D. MALLE',
				'RUGGAR IGGE SH/HAKIMI',
				'JANGEBE ISLAMIC SCHOOL',
				'RAFIN SABO PRIMARY SCH',
				"NORMADIC SCH. GWASTU (S/HAKIM GWASTU)",
				'SHIYAR HAKIMI, DUNKA',
				"PRY SCH. BADAU (BADAU BAKIN KASUWA)"
			];
		}
	}