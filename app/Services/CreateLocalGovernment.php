<?php

namespace App\Services;

use App\Services\Wards\CreateWard;
use App\Lga;
use App\User;
use Illuminate\Support\Facades\Hash;

/**
* this class will take each local government and do other actities
*/

class CreateLocalGovernment
{

	use CreateWard;

	public $lgas;

	public $local;

	function __construct($lga)
	{
		$this->lgas = $lga;
  
		$this->doLocalGovernment();
	}

	protected function doLocalGovernment()
	{
		// foreach ($this->lgas as $lga) {
		// 	$local = $this->local = Lga::firstOrCreate(['name'=>$lga]);
		// 	$this->registerUser($local);
		// }
		$this->registerUser(Lga::find(1));

	}

	protected function registerUser(Lga $lga)
	{

		// User::firstOrCreate([
		// 	'email'=>'l'.$this->code($lga->id).'@apc.com',
		// 	'code'=>'l'.$this->code($lga->id),
		// 	'password'=>Hash::make('l'.$this->code($lga->id)),
  //           'lga_id'=>$lga->id
		// ]);
		$this->ward($lga);
	}
	protected function code($code){
		if($code < 10){
			$code = '000'.$code;
		}else{
			$code = '00'.$code;
		}
        return $code;
	}
}