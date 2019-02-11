<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Rimawa
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'HOSPITAL (SHIYAR RAFI MAGAJI, DISPENSARY)',
				'GYAYYU/GODA GADO',
				"YAR’KOFA (BULUN KUKUT)",
				'YARKOFA (RUNBUKAWA)',
				'BAKIN FANFO (MULLELA)',
				'KATSIRA',
				'JAR GABA',
				'KETA/MULLELA',
				'PRI. SCH. FALALIYA (FALIYA)',
				'DAN TUDU, DAN TUDU',
				'FLIN DUBA (DUBA JALLO S/FAWA)',
				'ZANGON ARAWA, ZANGO ARAWA',
				'KURI',
				'TAKARAU, TAKARAU',
				'MAHALBA',
				'DISPENSARY GIDAN KIRYA (GIDAN KIRYA)',
				'KAIKAZZAKA/AMBARURA',
				'BAKIN KASUWA (BIYARDA)',
				'RIYOJIN TANKA,JULI'
			];
		}
	}