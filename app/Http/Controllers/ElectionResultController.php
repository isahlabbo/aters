<?php

namespace App\Http\Controllers;

use App\Ward;
use App\Lga;
use App\User;
use App\PollingUnit;
use App\Incidence;
use App\Result;
use App\LgaResultCount;
use Illuminate\Http\Request;
use App\Http\Requests\ElectionResultFormRequest;

class ElectionResultController extends Controller
{
    public function sendResult(ElectionResultFormRequest $request)
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
            if($this->getModel($presidential_result)->apc != 0){
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
                $lga = $this->lgaPresidentialCount($presidential_result);
                $lga->update([
                    'apc' => $lga->apc + $request->presidential_apc,
                    'pdp' => $lga->pdp + $request->presidential_pdp,
                    'other' => $lga->other + $request->presidential_other,
                    'valid' => $lga->valid + $votes['valid'],
                    'invalid' => $lga->invalid + $votes['invalid'],
                    'acredited' => $lga->acredited + $votes['acredited'],
                    'registered' => $lga->registered + $votes['registered'],
                ]);
            } 
            
            $senatorial_result->update([
                'pdp'=>$request->senatorial_pdp,
                'apc'=>$request->senatorial_apc,
                'other'=>$request->senatorial_other,
                'valid_vote'=>$request->senatorial_pdp + $request->senatorial_apc + $request->senatorial_other,
                'invalid_vote'=>$request->senatorial_invalid_vote
            ]);
            if($this->getModel($senatorial_result)->apc != 0){
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
                $lga = $this->lgaSenatorialCount($senatorial_result);
                $lga->update([
                    'apc' => $lga->apc + $request->senatorial_apc,
                    'pdp' => $lga->pdp + $request->senatorial_pdp,
                    'other' => $lga->other + $request->senatorial_other,
                    'valid' => $lga->valid + $votes['valid'],
                    'invalid' => $lga->invalid + $votes['invalid'],
                    'acredited' => $lga->acredited + $votes['acredited'],
                    'registered' => $lga->registered + $votes['registered'],
                ]);
                
            }
            $presentative_result->update([
                'pdp'=>$request->representative_pdp,
                'apc'=>$request->representative_apc,
                'other'=>$request->representative_other,
                'valid_vote'=>$request->representative_pdp + $request->representative_apc + $request->representative_other,
                'invalid_vote'=>$request->representative_invalid_vote
            ]);
            if($this->getModel($presentative_result)->apc != 0){
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
                $lga = $this->lgaRepresentativeCount($presentative_result);
                $lga->update([
                    'apc' => $lga->apc + $request->representative_apc,
                    'pdp' => $lga->pdp + $request->representative_pdp,
                    'other' => $lga->other + $request->representative_other,
                    'valid' => $lga->valid + $votes['valid'],
                    'invalid' => $lga->invalid + $votes['invalid'],
                    'acredited' => $lga->acredited + $votes['acredited'],
                    'registered' => $lga->registered + $votes['registered'],
                ]);
            }
            
        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }
    public function resultUpdate(ElectionResultFormRequest $request)
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
            $model = $this->getModel($presidential_result);
            $count = $this->getResultCount($presidential_result);
            $votes = $this->getResultVotes($presidential_result);
           
            $count->update([
                'apc' => $count->apc - $model->apc + $request->presidential_apc,
                'pdp' => $count->pdp - $model->pdp + $request->presidential_pdp,
                'other' => $count->other - $model->other + $request->presidential_other,
                'valid' => $count->valid - $model->valid + $votes['valid'],
                'invalid' => $count->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $count->acredited - $model->acredited + $votes['acredited'],
                'registered' => $count->registered - $model->registered + $votes['registered'],
            ]);
            $lga = $this->lgaPresidentialCount($presidential_result);
            $lga->update([
                'apc' => $lga->apc - $model->apc + $request->presidential_apc,
                'pdp' => $lga->pdp - $model->pdp  + $request->presidential_pdp,
                'other' => $lga->other - $model->other  + $request->presidential_other,
                'valid' => $lga->valid - $model->valid  + $votes['valid'],
                'invalid' => $lga->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $lga->acredited - $model->acredited + $votes['acredited'],
                'registered' => $lga->registered - $model->registered + $votes['registered'],
            ]);
            $presidential_result->update([
                'pdp'=>$request->presidential_pdp,
                'apc'=>$request->presidential_apc,
                'other'=>$request->presidential_other,
                'valid_vote'=>$request->presidential_apc + $request->presidential_pdp + $request->presidential_other,
                'invalid_vote'=>$request->presidential_invalid_vote
            ]);
            $model = $this->getModel($senatorial_result);
            $count = $this->getResultCount($senatorial_result);
            $votes = $this->getResultVotes($senatorial_result);
            $count->update([
                'apc' => $count->apc - $model->apc + $request->senatorial_apc,
                'pdp' => $count->pdp - $model->pdp + $request->senatorial_pdp,
                'other' => $count->other - $model->other + $request->senatorial_other,
                'valid' => $count->valid - $model->valid + $votes['valid'],
                'invalid' => $count->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $count->acredited - $model->acredited + $votes['acredited'],
                'registered' => $count->registered - $model->registered + $votes['registered'],
            ]);
            $lga = $this->lgaSenatorialCount($senatorial_result);
            $lga->update([
                'apc' => $lga->apc - $model->apc + $request->senatorial_apc,
                'pdp' => $lga->pdp - $model->pdp  + $request->senatorial_pdp,
                'other' => $lga->other - $model->other  + $request->senatorial_other,
                'valid' => $lga->valid - $model->valid  + $votes['valid'],
                'invalid' => $lga->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $lga->acredited - $model->acredited + $votes['acredited'],
                'registered' => $lga->registered - $model->registered + $votes['registered'],
            ]);
            $senatorial_result->update([
                'pdp'=>$request->senatorial_pdp,
                'apc'=>$request->senatorial_apc,
                'other'=>$request->senatorial_other,
                'valid_vote'=>$request->senatorial_pdp + $request->senatorial_apc + $request->senatorial_other,
                'invalid_vote'=>$request->senatorial_invalid_vote
            ]);

            $model = $this->getModel($presentative_result);
            $count = $this->getResultCount($presentative_result);
            $votes = $this->getResultVotes($presentative_result);
            $count->update([
                'apc' => $count->apc - $model->apc + $request->representative_apc,
                'pdp' => $count->pdp - $model->pdp + $request->representative_pdp,
                'other' => $count->other - $model->other + $request->representative_other,
                'valid' => $count->valid - $model->valid + $votes['valid'],
                'invalid' => $count->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $count->acredited - $model->acredited + $votes['acredited'],
                'registered' => $count->registered - $model->registered + $votes['registered'],
            ]);
            $lga = $this->lgaRepresentativeCount($presentative_result);
            $lga->update([
                'apc' => $lga->apc - $model->apc + $request->representative_apc,
                'pdp' => $lga->pdp - $model->pdp  + $request->representative_pdp,
                'other' => $lga->other - $model->other  + $request->representative_other,
                'valid' => $lga->valid - $model->valid  + $votes['valid'],
                'invalid' => $lga->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $lga->acredited - $model->acredited + $votes['acredited'],
                'registered' => $lga->registered - $model->registered + $votes['registered'],
            ]);
            $presentative_result->update([
                'pdp'=>$request->representative_pdp,
                'apc'=>$request->representative_apc,
                'other'=>$request->representative_other,
                'valid_vote'=>$request->representative_pdp + $request->representative_apc + $request->representative_other,
                'invalid_vote'=>$request->representative_invalid_vote
            ]);
        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }
    public function getModel($models)
    {
        foreach ($models->get() as $model) {
            return $model;
        }
    }
    public function getResultCount($result)
    {
        foreach ($result->get() as $result) {
            return $result->collation->resultCount;
        }
    }
    public function lgaPresidentialCount($result)
    {
        foreach ($result->get() as $result) {
            $lga_id = $result->pollingUnit->ward->lga->id;
            foreach (LgaResultCount::where(['lga_id'=>$lga_id, 'type_id'=>1])->get() as $result) {
            	return $result;
            }
        }
    }
    public function updateResult()
    {
        $users = [];
        foreach (User::where('polling_unit_id','!=',null)->get() as $user) {
            $users[] = $user;
        }
        return view('polling_units',['users'=>$users]);
    }
    public function lgaSenatorialCount($result)
    {
        foreach ($result->get() as $result) {
            $lga_id = $result->pollingUnit->ward->lga->id;
            foreach (LgaResultCount::where(['lga_id'=>$lga_id, 'type_id'=>2])->get() as $result) {
            	return $result;
            }
        }
    }
    public function lgaRepresentativeCount($result)
    {
        foreach ($result->get() as $result) {
            $lga_id = $result->pollingUnit->ward->lga->id;
            foreach (LgaResultCount::where(['lga_id'=>$lga_id, 'type_id'=>3])->get() as $result) {
            	return $result;
            }
        }
    }
    public function editResult(Request $request)
    {
        $pollingUnit = PollingUnit::find($request->pollingUnit);
        $pollingUnits = [
            'id' => $pollingUnit->id,
            'acredited'=> $pollingUnit->acredited,
            'registered'=>$pollingUnit->registered
        ];
        $presidential = null;
        $senatorial = null;
        $representative = null;
        foreach ($pollingUnit->results as $result) {
            switch ($result->type_id) {
                case '1':
                    $presidential = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid_vote,
                    ];
                    break;
                
                case '2':
                    $senatorial = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid_vote,
                    ];
                    break;
                
                default:

                    $representative = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid_vote,
                    ];
                   
                    break;
            }
        }
        return view('edit_result',['pollingUnit'=>$pollingUnits,'presidential'=>$presidential,'senatorial'=>$senatorial,'representative'=>$representative]);
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
