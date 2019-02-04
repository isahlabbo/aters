<?php
namespace App\Services\PollingUnit\DangeShuni;
	
	class Tuntube
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'HEALTH CLINIC KWANAWA (KWANAWA BAKIN TIT)',
				'G.H KWANAWA',
				'DAMBUWA PRY SCH.',
				'DAMBUWA PRIMARY SCHOOL (DAMBUWA G. HAKIMI)',
				'GIDAN BAIDU PRIMARY SCHOOL GIDAN BAIDU (GIDAN BAIDU KAN HANYA)',
				'GONAR ADAMU, GONAR ADAMU',
				'TUDUN MAITANDU PRY SCH',
				'TSEHE PRY SCH.',
				'GAREJIN GUMBULU/ PRIMARY SCHOOL GUMBULU (GAREJIN GUMBULU)',
				'TUNTUBE PRY SCH.',
				'RUGGAR DUTSI PRI. SCH',
				'TUNDUNBE/ PRIMARY SCHOOL TUNTUBE (TUNTUBE GARKAN HAKIMI)',
				'RUGGAR GIWA PRI. SCH',
				'TUDUN DANJEKA PRIMARY SCHOOL',
				'LUGGA TSARA PRI. SCH',
				'HEALTH CLINIC KWANAWA (LITTIGAWO GAINO)',
				'LITTIGAWO/ KWANAWA (LITTIGAWO BAKIN TITI)',
				'ARMY C.M.P.S, ARMY C.M.P.S I',
				'ARMY C.M.P.S, ARMY C.M.P.S II',
				'ARMY C.M.P.S, ARMY C.M.P.S III',
				'ARMY C.M.P.S, ARMY C.M.P.S IV',
				'ARMY C.M.P.S, ARMY C.M.P.S V',
				'OFFA ROAD'
			];
		}
	}