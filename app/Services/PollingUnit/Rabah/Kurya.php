<?php
namespace App\Services\PollingUnit\Rabah;
	
	class Kurya
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'SHIYAR AJIYA',
				'SHIYAR RAFI',
				'SHIYAR MAGAJI',
				'SHIYAR DANHAJO J.N.I. (SHIYAR DANHAJO)',
				'SHIYAR KAIWAR DAWA',
				'SHIYAR ELAWO',
				'KWATTE‐MAGAJI‐KWATTEM AGAJI / SHIYAR KWATE MAGAJI'
			];
		}
	}