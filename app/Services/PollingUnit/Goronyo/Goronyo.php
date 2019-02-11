<?php
namespace App\Services\PollingUnit\Goronyo;
	
	class Goronyo
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'KAMFALA (SHIYAR BUGAJE)',
				'SHIYAR SARKIN YAKI, YARKOFA',
				'SHIYAR MADATSA, MADATSA',
				'DAN FILI (SHIYAR NOMA)',
				'SHIYAR SABONGARI, BUGAJE PRY SCH',
				'RUMFAR DOKA (SHIYAR YAMMA, YANHUDU)',
				'MA’AHADU ISLAMIYA (ZAMFARAWA)',
				'DAN FILI KIRARE (KIRAREN DUSTI)',
				'ILLELA/MARIRI, ILLELA',
				'TALOKA/BADAMA, BADAMA',
				'FILIN KASUWA (TALOKA KANWURI)',
				'BALA KOZO, BALA KOZO',
				'GARE, GARE',
				'GADON MATA, GADON MATA',
				'KUMAJI, KUMAJI',
				'BAKIN RIJIYA (TALOKA GADAWA)',
				'ASARARA, STADIUM GORONYO',
				'KIRARE, KIRARE PRY SCH'
			];
		}
	}