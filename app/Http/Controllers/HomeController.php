<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;
use App\Lga;
use App\PollingUnit;
use App\Result;
use App\Http\Requests\ElectionResultFormRequest;
use App\Http\Requests\ElectionFormRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function localSummary()
    {
        if(Auth()->User()->lga_id != null){
            $acredited = 0;
            $registered = 0;
            $pdp = 0;
            $apc = 0;
            $valid_vote = 0;
            $invalid_vote = 0;
            $other = 0;
            foreach(Auth()->User()->lga->wards as $ward){
                foreach ($ward->pollingUnits as $pollingUnit) {
                    $acredited = $acredited + $pollingUnit->acredited;
                    $registered = $registered + $pollingUnit->registered;
                }
            }
            return [
                'registered' => $registered,
                'acredited' => $acredited,
                'pdp' => $pdp,
                'apc' => $apc,
                'valid_vote' => $valid_vote,
                'invalid_vote' => $invalid_vote,
                'other' => $other
            ];
        }else{
            return [];
        }
    }

    public function index()
    {
        $submitted = true;
        if(Auth()->user()->lga_id == null){
            $pollingUnits = null;
            $registered = null;
            foreach(Auth()->user()->pollingUnit->results as $result){
                if($result->apc == 0){
                    $submitted = false; 
                }
            }
        }else{
            $unit = 0;
            $register = 0;
            foreach(Auth()->user()->lga->wards as $ward){
                $unit = $unit + count($ward->pollingUnits);
                foreach($ward->pollingUnits as $pollingUnit){
                    $register = $register + $pollingUnit->registered;
                }
            }
            $pollingUnits = $unit;
            $registered = $register;
        }

        return view('home',['submitted'=>$submitted,'register'=>$registered,'pollingUnits'=>$pollingUnits,'user'=>Auth()->User(),'summary'=>$this->localSummary()]);
    }
    
    public function accredited(ElectionFormRequest $request)
    {
        
        if(isset($request->registered)){
            Auth()->User()->pollingUnit->update(['registered'=>$request->registered]);
        }else{
            Auth()->User()->pollingUnit->update(['acredited'=>$request->acredited]);
        }

        session()->flash('message','Acredited voters was sent successfully');
        return redirect('/home');
    }
    public function result(Request $request)
    {
        
        if(isset($request->id)){

            $pollingUnit = PollingUnit::find($request->id);

            $pollingUnit->update(['acredited'=>$request->acredited,'registered'=>$request->registered]);

        }else{

            $pollingUnit = Auth()->User()->pollingUnit;

        }
            $presidential_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',1);
             
            $senatorial_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',2);

            $presentative_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',3);

            $presidential_result->update([
                'pdp'=>$request->presidential_pdp,
                'apc'=>$request->presidential_apc,
                'other'=>$request->presidential_other,
                'valid_vote'=>$request->presidential_apc + $request->presidential_pdp + $request->presidential_other,
                'invalid_vote'=>$request->presidential_invalid_vote
            ]);
            $senatorial_result->update([
                'pdp'=>$request->senatorial_pdp,
                'apc'=>$request->senatorial_apc,
                'other'=>$request->senatorial_other,
                'valid_vote'=>$request->senatorial_pdp + $request->senatorial_apc + $request->senatorial_other,
                'invalid_vote'=>$request->senatorial_invalid_vote
            ]);
            $presentative_result->update([
                'pdp'=>$request->representative_pdp,
                'apc'=>$request->representative_apc,
                'other'=>$request->representative_other,
                'valid_vote'=>$request->representative_pdp + $request->representative_other + $request->representative_other,
                'invalid_vote'=>$request->representative_invalid_vote
            ]);
        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }

    public function newResult(Request $request)
    {
        return view('new_result',['id'=>$request->id]);
    }

}
