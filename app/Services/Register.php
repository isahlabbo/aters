<?php
namespace App\Services;
/**
* this class will generate all the data required for the applictaion
*/
use App\User;
use App\Lga;
use App\Ward;
use App\Result;
use App\PollingUnit;
use Illuminate\Support\Facades\Hash;

class Register
{
	
	function __construct($data)
	{
		$this->data = $data;
		$this->createInfo();

	}

	protected function createInfo()
	{

		foreach ($this->data as $data) {

			foreach ($data as $lga) {
               
				//create local government
				$local = Lga::create(['name'=>$lga['name']]);

				//create the user if the local government
				User::create([
		            'email'=>'l'.$this->localCode($local->id).'@apc.com',
					'code'=>'l'.$this->localCode($local->id),
					'password'=>Hash::make('l'.$this->localCode($local->id)),
		            'lga_id'=>$local->id
				]);

				foreach ($lga['wards'] as $wards) {

					foreach ($wards as $ward) {

                        //register ward
                        $this_ward = Ward::create(['name'=>$ward['name'],'lga_id'=>$local->id]);

						foreach ($ward['pollingUnits'] as $pollingUnits) {
                            
							foreach ($pollingUnits as $pollingUnit) {
                                
                                //create polling unit 
								$agent = PollingUnit::create(['name'=>$pollingUnit,'ward_id'=>$this_ward->id]);
								// create polling unit result with zero values
                                 Result::create(['polling_unit_id'=>$agent->id]);
								//create agent of the polling unit
								User::create([
                                    'email'=>'a'.$this->agentCode($agent->id).'@apc.com',
									'code'=>'a'.$this->agentCode($agent->id),
									'password'=>Hash::make('a'.$this->agentCode($agent->id)),
									'polling_unit_id' => $agent->id
								]);
							}

						}

					}
				}

			}

		}
	}

	protected function agentCode($code)
	{
		switch (strlen($code)) {
			case '1':
				$code = '000'.$code;
				break;
			case '2':
				$code = '00'.$code;
				break;
			case '3':
				$code = '0'.$code;
				break;
			
			default:
				$code = $code;
				break;
		}
        return $code;
	}
	protected function localCode($code)
	{
		if($code < 10){
			$code = '000'.$code;
		}else{
			$code = '00'.$code;
		}
        return $code;
	}
}