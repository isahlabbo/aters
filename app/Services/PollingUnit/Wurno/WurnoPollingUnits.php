<?php
namespace App\Services\PollingUnit\Wurno;

/**
* this class binji ward array and create their polling unit
*/
class WurnoPollingUnits
{
	
	function __construct()
	{
		$this->pollingUnits = $this->getPollingUnits();
	}

	protected function getPollingUnits()
	{
        return [
        	
        	['name'=>'Achida','pollingUnits'=> new Achida],
        	['name'=>'Alkammu','pollingUnits'=> new Alkammu],
        	['name'=>'Chacho','pollingUnits'=> new Chacho],
        	['name'=>'Dankemu','pollingUnits'=> new Dankemu],
        	['name'=>'Dinawa','pollingUnits'=> new Dinawa],
        	['name'=>'Dinbiso','pollingUnits'=> new Dinbiso],
        	['name'=>'Kwargaba','pollingUnits'=> new Kwargaba],
        	['name'=>'Kwasare','pollingUnits'=> new Kwasare],
        	['name'=>'Lahodu','pollingUnits'=> new Lahodu],
        	['name'=>'Magarya','pollingUnits'=> new Magarya],
        	['name'=>'Marafa','pollingUnits'=> new Marafa],
        	
        ];
	}


}