<?php
namespace App\Services\Collation;
use App\Lga;
/**
* this class will return the collation of all the presidential result of the election
*/

class Presidential
{
	
	function __construct()
	{
		$this->result = $this->result();
	}

	protected function result()
	{

		$pdp = 0;
		$apc = 0;
		$other = 0;
        $invalid = 0;
        $registered = 0;
        $acredited = 0;
        $lga_index = [];
        for ($i=1; $i <= 23; $i++) {
        	$lga_index[] = $i;
        }
		foreach ($lga_index as $index) {

            $lga = Lga::find($index);
            $pdp = $pdp + $lga->presidential()['pdp'];
            $apc = $apc + $lga->presidential()['apc'];
            $other = $other + $lga->presidential()['other'];
            $valid = $invalid + $lga->presidential()['valid'];
            $invalid = $invalid + $lga->presidential()['invalid'];
            $registered = $registered + $lga->presidential()['registered'];
            $acredited = $acredited + $lga->presidential()['acredited'];

		}
        dd([
            'pdp' => $pdp,
            'apc' => $apc,
            'other' => $other,
            'invalid' => $invalid,
            'acredited' => $acredited,
            'registered' => $registered
		]);
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