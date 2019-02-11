<?php
namespace App\Services\PollingUnit\Wamakko;

/**
* this class binji ward array and create their polling unit
*/
class WamakkoPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Arkilla','pollingUnits'=> new Arkilla],
                ['name'=>'Bado / Kasarawa','pollingUnits'=> new Bado_Kasarawa],
        	['name'=>'DUNDAYE / GUMBURAWA','pollingUnits'=> new Dundaye_Gumburawa],
        	['name'=>'G/Bubu/G/Yaro','pollingUnits'=> new G_Bubu_G_Yaro],
        	['name'=>'G/Hamidu/G/Kaya','pollingUnits'=> new G_Hamidu_G_Kaya],
        	['name'=>'Gumbi / Wajake','pollingUnits'=> new Gumbi_Wajake],
        	['name'=>'Gwamatse','pollingUnits'=> new Gwamatse],
        	['name'=>'K/Kimba/Gedawa','pollingUnits'=> new K_Kimba_Gedawa],
        	['name'=>'Kalanbaina / Girabshi','pollingUnits'=> new Kalanbaina_Girabshi],
        	['name'=>'Kammata','pollingUnits'=> new Kammata],
        	['name'=>'Wamakko','pollingUnits'=> new Wamakko],
        	
        ];
	}


}