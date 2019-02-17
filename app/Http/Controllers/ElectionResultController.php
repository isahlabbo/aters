<?php

namespace App\Http\Controllers;

use App\Ward;
use App\Lga;
use App\PollingUnit;
use App\Incidence;
use App\Result;
use Illuminate\Http\Request;
use App\Http\Requests\ElectionResultFormRequest;

class ElectionResultController extends Controller
{
    public function sendResult(Request $request)
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
            
            $count = $this->getResultCount($presidential_result);
            $votes = $this->getResultVotes($presidential_result);
            $count->update([
                'apc' => $count->apc + $request->presidential_apc,
                'pdp' => $count->pdp + $request->presidential_pdp,
                'other' => $count->other + $request->presidential_other,
                'valid' => $count->valid + $votes['valid'],
                'invalid' => $count->invalid + $votes['invalid'],
                'acredited' => $count->acredited + $votes['acredited'],
                'registered' => $count->registered + $votes['registered'],
            ]);
            $senatorial_result->update([
                'pdp'=>$request->senatorial_pdp,
                'apc'=>$request->senatorial_apc,
                'other'=>$request->senatorial_other,
                'valid_vote'=>$request->senatorial_pdp + $request->senatorial_apc + $request->senatorial_other,
                'invalid_vote'=>$request->senatorial_invalid_vote
            ]);

            $count = $this->getResultCount($senatorial_result);
            $votes = $this->getResultVotes($senatorial_result);
            $count->update([
                'apc' => $count->apc + $request->senatorial_apc,
                'pdp' => $count->pdp + $request->senatorial_pdp,
                'other' => $count->other + $request->senatorial_other,
                'valid' => $count->valid + $votes['valid'],
                'invalid' => $count->invalid + $votes['invalid'],
                'acredited' => $count->acredited + $votes['acredited'],
                'registered' => $count->registered + $votes['registered'],
            ]);

            $presentative_result->update([
                'pdp'=>$request->representative_pdp,
                'apc'=>$request->representative_apc,
                'other'=>$request->representative_other,
                'valid_vote'=>$request->representative_pdp + $request->representative_apc + $request->representative_other,
                'invalid_vote'=>$request->representative_invalid_vote
            ]);

            
            $count = $this->getResultCount($presentative_result);
            $votes = $this->getResultVotes($presentative_result);
            $count->update([
                'apc' => $count->apc + $request->representative_apc,
                'pdp' => $count->pdp + $request->representative_pdp,
                'other' => $count->other + $request->representative_other,
                'valid' => $count->valid + $votes['valid'],
                'invalid' => $count->invalid + $votes['invalid'],
                'acredited' => $count->acredited + $votes['acredited'],
                'registered' => $count->registered + $votes['registered'],
            ]);

        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }

    public function getResultCount($result)
    {
        foreach ($result->get() as $result) {
            return $result->collation->resultCount;
        }
    }
    public function getResultVotes($result)
    {
        foreach ($result->get() as $result) {
            return [
            	'valid'=>$result->valid_vote,
            	'invalid'=>$result->invalid_vote,
            	'acredited'=>$result->pollingUnit->acredited,
            	'registered'=>$result->pollingUnit->registered
            ];
        }
    }
}
