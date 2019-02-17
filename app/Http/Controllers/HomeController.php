<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ward;
use App\Lga;
use App\PollingUnit;
use App\Incidence;
use App\Result;
use App\Http\Requests\ElectionResultFormRequest;
use App\Http\Requests\ElectionFormRequest;
use App\Services\Collation\Presidential;
use App\Services\Collation\Senatorial;
use App\Services\Collation\Representative;

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
        if(Auth()->user()->collation_id == 1){
            $representative = new Representative();
            
            $senatorial = new Senatorial();
            $presidential = new Presidential();
              return view('home',['representative'=>$representative->result,'presidential'=> $presidential->result,'senatorial'=>$senatorial->result, 'user'=>Auth()->User()]);
        }else{
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

    
    public function getResultCount($result)
    {
        foreach ($result->get() as $result) {
            return $result->collation->resultCount;
        }
    }
    public function newResult(Request $request)
    {
        return view('new_result',['id'=>$request->id]);
    }
    public function incidence(Request $request, Incidence $incidence)
    {
        $new_incidence = $incidence->firstOrCreate(['name'=>$request->incidence]);
        $poll = $new_incidence->pollingUnitIncidence()->create(['polling_unit_id'=>Auth()->User()->polling_unit_id, 'incidence_id'=>$new_incidence->id]);
        session()->flash('message','The was sent successfully');
        return redirect('/home');
    }

}
