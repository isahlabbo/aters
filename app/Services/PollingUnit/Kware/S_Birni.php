<?php
namespace App\Services\PollingUnit\Kware;
	
	class S_Birni
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'JINGINE, JINGINE',
				'UNDER TREE TUNGAR MAIJAKKAI (TUNGAR MAIJAKKAI)',
				'GIDAN JAHADI, GIDAN JAHADI',
				'IHI, IHI',
				'GUNDUNGA YALO',
				'GUNDUNDA ALKALI',
				'GUNDUNGA ALKALI SHIYAR HAKIMI',
				'GIDAN KARMA PRI. SCH.',
				'BALKORI, PRI. SCH.',
				'SABON BIRNI, PRI. SCH.',
				'JAJAYE, SHIYAR HAKIMI',
				'DOBAH, SHIYAR HAKIMI',
				'TUNGAR AMMA, SHIYAR HAKIMI',
				'BELA, SHIYAR HAKIMI',
				'MALAKIWA, SHIYAR HAKIMI'
			];
		}
	}