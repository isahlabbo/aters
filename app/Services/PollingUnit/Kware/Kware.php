<?php
namespace App\Services\PollingUnit\Kware;
	
	class Kware
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'DOGON FILI, DANFILI',
				'SANGAME, SANGAME',
				'RUGGARWAKASO, R/WAKASO',
				'SHIYAR GAWO, SHIYAR GAWO',
				'UNDER TREE (KOFAR BARGA, SHIYAR BARGA)',
				'YAR YAHAYA, YAR YAHAYA',
				'TARAWA, TARAWA/ TARAWA',
				'RUNFAR FALKE, RUNFAR FALKE',
				'SANGAME, SANGAME',
				'KOFAR BARGA, SHIYAR BARGA'
			];
		}
	}