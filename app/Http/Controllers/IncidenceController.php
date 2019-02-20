<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PollingUnitIncidence;
use App\Ward;
use App\Incidence;

class IncidenceController extends Controller
{

    public function editIncidence(Request $request)
    {
    	if(isset($request->id)){
    		return view('edit_incidence',['incidence'=>PollingUnitIncidence::find($request->id)]);
    	}
    }

    public function resolveIncidence(Request $request)
    {
    	if(isset($request->id)){
            PollingUnitIncidence::find($request->id)->incidence->update(['resolve'=>1]);
    	}
    	
    	return redirect('/home');
    }
    public function wardIncidence(Request $request)
    {
        return view('new_incidence',['pollingUnits'=>Ward::find($request->id)->pollingUnits,'incidences'=>Incidence::all()]);
    }
    public function newIncidence(Request $request, Incidence $incidence)
    {
        $new_incidence = $incidence->firstOrCreate(['name'=>$request->incidence]);
        $poll = $new_incidence->pollingUnitIncidences()->create(['polling_unit_id'=>Auth()->User()->polling_unit_id, 'incidence_id'=>$new_incidence->id]); 
        session()->flash('message','The was sent successfully');
        return redirect('/home');
    }
    public function insertIncidence(Request $request, Incidence $incidence)
    {
        $new_incidence = Incidence::find($request->incidence);
        $poll = $new_incidence->pollingUnitIncidences()->create(['polling_unit_id'=>$request->pollingUnit, 'incidence_id'=>$new_incidence->id]); 
        session()->flash('message','The was sent successfully');
        return redirect('/home');
    }
    
}
