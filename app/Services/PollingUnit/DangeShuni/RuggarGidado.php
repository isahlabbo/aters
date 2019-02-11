<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class RuggarGidado
	{
		
		function __construct()
		{
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'ILLELA GAKAR HKM/PRIMARY SCHOOL (ILLELA GARKAR HAKIMI)',
				'ILLELA M.P.S',
				'KWANNAWA JALI/ PRIMARY SCHOOL K/JALI (KWANNAWA JALI)',
				'BANGANANGE',
				'DILINGU',
				'SAMBO DARNI',
				'DANBARUNJE/MODEL PRIMARY SCHOOL DAN‐BURUNJE (DAN BURUNJI)',
				'GYALAUDE B',
				'BAILA',
				'DABAGIN RIKINA/PRIMARY SCHOOL D/RIKINA (DABAGIN RIKINA)',
				'RUGGAR DUBBU',
				'RAFIN JIDDA',
				'ZANGO, ZANGO',
				'ILLELA RUGGAR DUBU/ PRIMARY SCHOOL R/DUBU (ILLELA RUG. DUBU)',
				'NAGANDI, NAGANDI'
			];
		}
	}