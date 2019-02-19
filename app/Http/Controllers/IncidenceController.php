<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PollingUnitIncidence;

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
}
