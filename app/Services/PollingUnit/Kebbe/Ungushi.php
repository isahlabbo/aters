<?php
namespace App\Services\pollingUnit\Kebbe;
	
	class Ungushi
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'GWANDI PRY SCH, GWANDI',
				'UNGUSHI PRY. SCH. (SHIYAR MAGAJI UNGUSHI)',
				'UNGUSHI PRY. SCH. (SH UBANDAWAKI UNGUSH)',
				'UNGUSHI ASIBITI',
				'PRY SCH MAIKURFUNA',
				'MAIKURFUNA GIDAN GARSO'
			];
		}
	}