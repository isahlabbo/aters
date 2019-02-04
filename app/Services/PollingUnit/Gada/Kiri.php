<?php
namespace App\Services\PollingUnit\Gada;
	
	class Kiri
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KIRI GARI PRY SCH I',
				'KIRI GARI SHIYAR HAKIMI',
				'SALAMAWA, SHIYAR HAKIMI I',
				'SALAMAWA GIDAN SIDI, SHIYAR MAGAJI II',
				'MANAI, SHIYAR HAKIMI',
				'KIRIN KWANAWA PRY SCH I',
				'KIRIN KWANAWA PRY SCH II',
				'TABANNI, PRY SCH',
				'DARANBA FULANI',
				'DULAI, SHIYAR HAKIMI',
				'MATSERIN KATUNE',
				'TAJEYE ALAMADO',
				'CHAMBUWAL KAIME',
				'GIDAN DABO',
				'GIDAN ALFARMA',
				'TABANNI GIDAN DILLE'
			];
		}
	}