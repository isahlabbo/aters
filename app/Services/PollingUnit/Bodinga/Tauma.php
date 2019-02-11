<?php
namespace App\Services\PollingUnit\Bodinga;
	
	class Tauma
	{
		
		function __construct()
		{
			# code...
			 $this->pollingUnits = $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'PRY SCH, GIDAN BANGO',
				'PRY SCH, TAUMA',
				'SHIYAR HAUSAWA',
				'SH/MAKERA',
				'SHIYAR FILIN YAR ARI S/MODE',
				'SH/DANJERA P.S',
				'SH ANDI, SH/D/JEKA',
				'SHIYAR LIMAN, SH/FULANI',
				'SHIYAR KANTI, SH/BAREBARI',
				'ALI FODIO PRY. SCH. (SHIYAR SARKI)',
				'FILIN AISHA, SH/AISHA FILIN AISHA',
				"POST OFFICE MAJEMA (SHIYAR MAJEMA)",
				"NIZZAMIYA (RUNJIN KUDU D/FILI)",
				'PRY. SCH. LOW COST (LOW COST)',
				"KWAKWARE (SHIYAR HAKIM /MARINA)"
			];
		}
	}