<?php
namespace App\Services\Collation;
/**
* this class will return senatorial result
*/
use App\Lga;

class Senatorial
{
	
	function __construct()
	{
		$this->result = [ 
            ['name' => 'SOKOTO CENTRAL', 'result' => $this->central()],
            ['name' => 'SOKOTO SOUTH', 'result' => $this->south()],
            ['name' => 'SOKOTO EAST', 'result' =>$this->east()]
		];
	}

	protected function central()
	{
		$lga = [
            '16',
            '17',
            '21',
            '11',
            '15',
            '1',
            '19',
            '6',
		];
		return $this->getResult($lga);
	}
    
	protected function south()
	{
		$lga = [
            '2', 
            '3', 
            '20', 
            '14', 
            '23', 
            '18', 
            '10' 

		];
		return $this->getResult($lga);
	}

	protected function east()
	{
		$lga = [
            '7',
            '8',
            '4',
            '22',
            '12',
            '5',
            '13',
            '9',

		];
		return $this->getResult($lga);
	}

	protected function getResult($array)
	{   
	      $pdp = 0;
		$apc = 0;
		$other = 0;
            $invalid = 0;
            $registered = 0;
            $acredited = 0;

		foreach ($array as $lga) {
			$lga = Lga::find($lga);
			$lga_result = $lga->summary();
                  $pdp = $pdp + $lga_result['senatorial']['pdp'];
                  $apc = $apc + $lga_result['senatorial']['apc'];
                  $other = $other + $lga_result['senatorial']['other'];
                  $invalid = $invalid + $lga_result['senatorial']['invalid'];
                  $registered = $registered + $lga->registered();
                  $acredited = $acredited + $lga->acredited();
      			
      		}

		return [
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'acredited' => $acredited,
            'registered' => $registered
		];
	}
}