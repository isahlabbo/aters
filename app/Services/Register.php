<?php
namespace App\Services;
/**
* this class will generate all the data required for the applictaion
*/
use App\User;
use App\Lga;
use App\Ward;
use App\Result;
use App\Type;
use App\Center;
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
		$centers = ['SOKOTO CENTER', 'SOKOTO EAST', 'SOKOTO SOUTH'];

		foreach ($centers as $center) {
			$userCenter = Center::firstOrCreate(['name'=>$center]);
			$code = substr(md5($userCenter->id), 0, 8);
			$userCenter->user()->create([
                'email'=>$code.'@apc.com',
				'code'=>$code,
				'password'=>Hash::make($code)
			]);
		}

		$code = substr(md5('collation'),0, 8);
		User::create([
            'email'=>$code.'@apc.com',
			'code'=>$code,
			'password'=>Hash::make($code),
			
		]);

		$type = ['Presidential','Sentorial','Representative'];
        foreach ($type as $name) {
        	Type::create(['name'=>$name]);
        }
		foreach ($this->data as $data) {

			foreach ($data as $lga) {
               
				//create local government
				$local = Lga::create(['name'=>$lga['name']]);

				//create the user if the local government
				$code = substr(md5($local->id.'l'),0, 8);
				$local->user()->create([
		            'email'=>$code.'@apc.com',
					'code'=>$code,
					'password'=>Hash::make($code),
				]);

				foreach ($lga['wards'] as $wards) {

					foreach ($wards as $ward) {

                        //register ward
                        $this_ward = Ward::create(['name'=>$ward['name'],'lga_id'=>$local->id]);

						foreach ($ward['pollingUnits'] as $pollingUnits) {
                            
							foreach ($pollingUnits as $pollingUnit) {
                                
                                //create polling unit 
								$agent = $this_ward->pollingUnits()->create(['name'=>$pollingUnit,'ward_id'=>$this_ward->id]);
								// create polling unit result with zero values
								for ($i=1; $i <= 3 ; $i++) { 
									Result::create(['type_id'=>$i,'polling_unit_id'=>$agent->id]);
								}
                                
                         
								//create agent of the polling unit
								$agent->user()->create([
                                    'email'=>'a'.$this->agentCode($agent->id).'@apc.com',
									'code'=>'a'.$this->agentCode($agent->id),
									'password'=>Hash::make('a'.$this->agentCode($agent->id)),
		
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