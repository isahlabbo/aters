<?php

namespace App\Http\Controllers;

use App\WardReturningResult;
use App\LgaReturningResult;
use Illuminate\Http\Request;

class ReturnResultController extends Controller
{
    public function index()
    {
    	return view('Dashboards.send_result');
    }
    public function edit()
    {    
        $user = Auth()->User();
        if($user->returning == 1){
            $lga = null;
            foreach(LgaReturningResult::where(['lga_id'=>$user->lga_id,'type_id'=>1])->get() as $this_lga){
                $lga = $this_lga;
            }
            $results = $user->lga->returningResults;
        }else{
            $lga = null; 
            foreach(WardReturningResult::where(['ward_id'=>$user->ward_id,'type_id'=>1])->get() as $this_lga){
            	$lga = $this_lga;
            }
            $results = $user->ward->returningResults;
        }
   	   
        $local = [
            'id' => $lga->id,
            'acredited'=> $lga->acredited,
            'registered'=>$lga->registered
        ];
        $presidential = null;
        $senatorial = null;
        $representative = null;
        foreach ($results as $result) {
            switch ($result->type_id) {
                case '1':
                    $presidential = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid,
                    ];
                    break;
                
                case '2':
                    $senatorial = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid,
                    ];
                    break;
                
                default:

                    $representative = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid,
                    ];
                   
                    break;
            }
        }
        return view('Dashboards.edit_result',['result'=>$lga,'presidential'=>$presidential,'senatorial'=>$senatorial,'representative'=>$representative]);
    }
    public function newResult(Request $request)
    {
	    	$user = Auth()->User();
	        if($user->returning == 1){
                $presidential_result = LgaReturningResult::where('lga_id',$user->lga_id)->where('type_id',1);

	            $senatorial_result = LgaReturningResult::where('lga_id',$user->lga_id)->where('type_id',2);

	            $presentative_result = LgaReturningResult::where('lga_id',$user->lga_id)->where('type_id',3);
	        }else{
                $presidential_result = WardReturningResult::where('ward_id',$user->ward_id)->where('type_id',1);

	            $senatorial_result = WardReturningResult::where('ward_id',$user->ward_id)->where('type_id',2);

	            $presentative_result = WardReturningResult::where('ward_id',$user->ward_id)->where('type_id',3);
	        }
            

            $presidential_result->update([
                'registered'=>$request->registered,
                'acredited'=>$request->acredited,
                'pdp'=>$request->presidential_pdp,
                'apc'=>$request->presidential_apc,
                'other'=>$request->presidential_other,
                'invalid'=>$request->presidential_invalid_vote
            ]);
           
            $senatorial_result->update([
            	'registered'=>$request->registered,
                'acredited'=>$request->acredited,
                'pdp'=>$request->senatorial_pdp,
                'apc'=>$request->senatorial_apc,
                'other'=>$request->senatorial_other,
                'invalid'=>$request->senatorial_invalid_vote
            ]);

            $presentative_result->update([
            	'registered'=>$request->registered,
                'acredited'=>$request->acredited,
                'pdp'=>$request->representative_pdp,
                'apc'=>$request->representative_apc,
                'other'=>$request->representative_other,
                'invalid'=>$request->representative_invalid_vote
            ]);
        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }
}
