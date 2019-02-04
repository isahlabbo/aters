<?php
namespace App\Services\PollingUnit\Isa;
	
	class Isa_North
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'FILIN TRANSFORMER GARKAR BARAYA (GARKAR BARAYA)',
				'UNDER CHEDIYA TREE SHIYAR BARAYA (SHIYAR BUGAJE)',
				'FILIN BOREHOLE KANTAMAWA (FAGE KANTAMAWA)',
				'FILIN BOREHOLE KANTAMAWA (KOFAR YAMMA)',
				'SARKIN GOBIR MODEL PRY, SCH ISA',
				'FILIN RIJIYA SARKAWA (SARKAWA)',
				'FILIN BOREHOLE (GARKAR SARKIN GOBIR)',
				'DAN FILI GARKAR SARDAUNA (GARKAR SARDAUNA)',
				'OLD LIBRARY BAKIN KASUWA (BAKIN KASUWA ISA)',
				'GOVT SCE SCH ISA, SEC SCH',
				'FILIN BOREHOLE SHIYAR BARAYA (SHIYAR BARAYA, ANGAWA)'
			];
		}
	}