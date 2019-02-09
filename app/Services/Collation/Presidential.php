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

		for ($i=1; $i <= 23; $i++) {

            $lga = Lga::find($i);
			$lga_result = $lga->result();
            $pdp = $pdp + $lga_result['presidential']['pdp'];
            $apc = $apc + $lga_result['presidential']['apc'];
            $other = $other + $lga_result['presidential']['other'];
            $invalid = $invalid + $lga_result['presidential']['invalid'];
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