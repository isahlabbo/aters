<?php
namespace App\Services\PollingUnit\Kware;
	
	class Bankanu
	{
		
		function __construct()
		{
			# code...
			$this->pollingUnits =  $this->pollingUnits();
		}

		public function pollingUnits(){
			return [
				'BANKANU, SHIYAR HAKIMI',
				'BANKANU MARABA, PRI. SCH',
				'UNDER TREE KASGADA (KASGADA S/HAKIMI)',
				'UNDER TREE KWARZARI (KWARZARI S/HAKIMI)',
				'FANDU, SHIYAR HAKIMI',
				'ALMUMIN, SHIYAR HAKIMI',
				'TUNGAR BAHAGO, SHIYAR HAKIMI',
				'MAKERA, SHIYAR HAKIMI',
				'RIJIYAR KADE, SHIYAR HAKIMI',
				'AGALAWA, SHIYAR HAKIMI',
				'SABON GARI, SHIYAR HAKIMI',
				'RUNJI, PRI. SCH.',
				'KALALAWA, PRI. SCH I',
				'KALALAWA, PRI. SCH II',
				'TUTUBA, SHIYAR HAKIMI',
				'KWALLATAWA, SHIYAR HAKIMI',
				'MASHIDI, SHIYAR HAKIMI'
			];
		}
	}