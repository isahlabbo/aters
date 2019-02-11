<?php
namespace App\Services\PollingUnit\Bodinga;

/**
* this class binji ward array and create their polling unit
*/
class BodingaPollingUnits
{
	
	function __construct()
	{
		
		$this->pollingUnits = $this->pollingUnits();
	}

	protected function pollingUnits()
	{
        return [
        	['name'=>'Kwacciyar Lalle','pollingUnits'=> new KwacciyarLalle],
        	['name'=>'MAZAN GARI/JIRGA MIYO','pollingUnits'=> new MazanGari],
        	['name'=>'SIFAWA/LUKUYAWA','pollingUnits'=> new Sifawa],
        	['name'=>'TAKATUKU/MADORAWA','pollingUnits'=> new Takatuku],
        	['name'=>'TULLUWA/KULAFASA','pollingUnits'=> new Tulluwa],
        	['name'=>'BODINGA/TAUMA','pollingUnits'=> new Tauma],
        	['name'=>'BAGARAWA','pollingUnits'=> new Badagarawa],
        	['name'=>'BADAU/DARHELA','pollingUnits'=> new Badau],
        	['name'=>'DINGYADI/BADAWA','pollingUnits'=> new Dingyadi],
        	['name'=>'DANCHADI','pollingUnits'=> new Danchadi],
        	['name'=>'BANGI/DABAGA','pollingUnits'=> new Bangi],
        ];
	}


}