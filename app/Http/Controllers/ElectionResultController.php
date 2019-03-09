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
            $governor_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',1);

            $assembly_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',2);


            $governor_result->update([
                'pdp'=>$request->governor_pdp,
                'apc'=>$request->governor_apc,
                'other'=>$request->governor_other,
                'valid_vote'=>$request->governor_apc + $request->governor_pdp + $request->governor_other,
                'invalid_vote'=>$request->governor_invalid_vote
            ]);
            if($this->getModel($governor_result)->apc != 0){
                $count = $this->getResultCount($governor_result);
                $votes = $this->getResultVotes($governor_result);
                $count->update([
                    'apc' => $count->apc + $request->governor_apc,
                    'pdp' => $count->pdp + $request->governor_pdp,
                    'other' => $count->other + $request->governor_other,
                    'valid' => $count->valid + $votes['valid'],
                    'invalid' => $count->invalid + $votes['invalid'],
                    'acredited' => $count->acredited + $votes['acredited'],
                    'registered' => $count->registered + $votes['registered'],
                ]);
                $lga = $this->lgaGovernorCount($governor_result);
                $lga->update([
                    'apc' => $lga->apc + $request->governor_apc,
                    'pdp' => $lga->pdp + $request->governor_pdp,
                    'other' => $lga->other + $request->governor_other,
                    'valid' => $lga->valid + $votes['valid'],
                    'invalid' => $lga->invalid + $votes['invalid'],
                    'acredited' => $lga->acredited + $votes['acredited'],
                    'registered' => $lga->registered + $votes['registered'],
                ]);
                foreach($pollingUnit->ward->resultCounts as $result){
                    if($result->type_id == 1){
                        $result->update([
                            'apc' => $result->apc + $request->governor_apc,
                            'pdp' => $result->pdp + $request->governor_pdp,
                            'other' => $result->other + $request->governor_other,
                            'valid' => $result->valid + $votes['valid'],
                            'invalid' => $result->invalid + $votes['invalid'],
                            'acredited' => $result->acredited + $votes['acredited'],
                            'registered' => $result->registered + $votes['registered'],
                        ]);
                    }else{
                        $result->update([
                            'apc' => $result->apc + $request->assembly_apc,
                            'pdp' => $result->pdp + $request->assembly_pdp,
                            'other' => $result->other + $request->assembly_other,
                            'valid' => $result->valid + $votes['valid'],
                            'invalid' => $result->invalid + $votes['invalid'],
                            'acredited' => $result->acredited + $votes['acredited'],
                            'registered' => $result->registered + $votes['registered'],
                        ]);
                    }
                }
            } 
            
            $assembly_result->update([
                'pdp'=>$request->assembly_pdp,
                'apc'=>$request->assembly_apc,
                'other'=>$request->assembly_other,
                'valid_vote'=>$request->assembly_pdp + $request->assembly_apc + $request->assembly_other,
                'invalid_vote'=>$request->assembly_invalid_vote
            ]);
            if($this->getModel($assembly_result)->apc != 0){
                $count = $this->getResultCount($assembly_result);
                $votes = $this->getResultVotes($assembly_result);
                $count->update([
                    'apc' => $count->apc + $request->assembly_apc,
                    'pdp' => $count->pdp + $request->assembly_pdp,
                    'other' => $count->other + $request->assembly_other,
                    'valid' => $count->valid + $votes['valid'],
                    'invalid' => $count->invalid + $votes['invalid'],
                    'acredited' => $count->acredited + $votes['acredited'],
                    'registered' => $count->registered + $votes['registered'],
                ]);
                $lga = $this->lgaAssemblyCount($assembly_result);
                $lga->update([
                    'apc' => $lga->apc + $request->assembly_apc,
                    'pdp' => $lga->pdp + $request->assembly_pdp,
                    'other' => $lga->other + $request->assembly_other,
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
            $governor_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',1);

            $assembly_result = Result::where('polling_unit_id',$pollingUnit->id)->where('type_id',2);

            $model = $this->getModel($governor_result);
            $count = $this->getResultCount($governor_result);
            $votes = $this->getResultVotes($governor_result);
           
            $count->update([
                'apc' => $count->apc - $model->apc + $request->governor_apc,
                'pdp' => $count->pdp - $model->pdp + $request->governor_pdp,
                'other' => $count->other - $model->other + $request->governor_other,
                'valid' => $count->valid - $model->valid + $votes['valid'],
                'invalid' => $count->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $count->acredited - $model->acredited + $votes['acredited'],
                'registered' => $count->registered - $model->registered + $votes['registered'],
            ]);
            $lga = $this->lgaGovernorCount($governor_result);
            $lga->update([
                'apc' => $lga->apc - $model->apc + $request->governor_apc,
                'pdp' => $lga->pdp - $model->pdp  + $request->governor_pdp,
                'other' => $lga->other - $model->other  + $request->governor_other,
                'valid' => $lga->valid - $model->valid  + $votes['valid'],
                'invalid' => $lga->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $lga->acredited - $model->acredited + $votes['acredited'],
                'registered' => $lga->registered - $model->registered + $votes['registered'],
            ]);
            $governor_result->update([
                'pdp'=>$request->governor_pdp,
                'apc'=>$request->governor_apc,
                'other'=>$request->governor_other,
                'valid_vote'=>$request->governor_apc + $request->governor_pdp + $request->governor_other,
                'invalid_vote'=>$request->governor_invalid_vote
            ]);
            $model = $this->getModel($assembly_result);
            $count = $this->getResultCount($assembly_result);
            $votes = $this->getResultVotes($assembly_result);
            $count->update([
                'apc' => $count->apc - $model->apc + $request->assembly_apc,
                'pdp' => $count->pdp - $model->pdp + $request->assembly_pdp,
                'other' => $count->other - $model->other + $request->assembly_other,
                'valid' => $count->valid - $model->valid + $votes['valid'],
                'invalid' => $count->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $count->acredited - $model->acredited + $votes['acredited'],
                'registered' => $count->registered - $model->registered + $votes['registered'],
            ]);
            $lga = $this->lgaAssemblyCount($assembly_result);
            $lga->update([
                'apc' => $lga->apc - $model->apc + $request->assembly_apc,
                'pdp' => $lga->pdp - $model->pdp  + $request->assembly_pdp,
                'other' => $lga->other - $model->other  + $request->assembly_other,
                'valid' => $lga->valid - $model->valid  + $votes['valid'],
                'invalid' => $lga->invalid - $model->invalid + $votes['invalid'],
                'acredited' => $lga->acredited - $model->acredited + $votes['acredited'],
                'registered' => $lga->registered - $model->registered + $votes['registered'],
            ]);

            $assembly_result->update([
                'pdp'=>$request->assembly_pdp,
                'apc'=>$request->assembly_apc,
                'other'=>$request->assembly_other,
                'valid_vote'=>$request->assembly_pdp + $request->assembly_apc + $request->assembly_other,
                'invalid_vote'=>$request->assembly_invalid_vote
            ]);
            
            foreach($pollingUnit->ward->resultCounts as $result){
                    if($result->type_id == 1){
                        $pollingUnitResult = getPollingUnitResult($pollingUnit,1);
                        $result->update([
                            'apc' => $result->apc - $pollingUnitResult->apc + $request->governor_apc,
                            'pdp' => $result->pdp - $pollingUnitResult->pdp + $request->governor_pdp,
                            'other' => $result->other - $pollingUnitResult->other + $request->governor_other,
                            'valid' => $result->valid - $pollingUnitResult->valid + $votes['valid'],
                            'invalid' => $result->invalid - $pollingUnitResult->invalid + $votes['invalid'],
                            'acredited' => $result->acredited - $pollingUnitResult->pollingUnit->acredited + $votes['acredited'],
                            'registered' => $result->registered - $pollingUnitResult->pollingUnit->registered + $votes['registered'],
                        ]);
                    }else{
                        $pollingUnitResult = getPollingUnitResult($pollingUnit,2);
                        $result->update([
                            'apc' => $result->apc - $pollingUnitResult->apc + $request->governor_apc,
                            'pdp' => $result->pdp - $pollingUnitResult->pdp + $request->governor_pdp,
                            'other' => $result->other - $pollingUnitResult->other + $request->governor_other,
                            'valid' => $result->valid - $pollingUnitResult->valid + $votes['valid'],
                            'invalid' => $result->invalid - $pollingUnitResult->invalid + $votes['invalid'],
                            'acredited' => $result->acredited - $pollingUnitResult->pollingUnit->acredited + $votes['acredited'],
                            'registered' => $result->registered - $pollingUnitResult->pollingUnit->registered + $votes['registered'],
                        ]);
                    }
                }
        session()->flash('message','Election result was sent successfully');
        return redirect('/home');
    }
    public function getModel($models)
    {
        foreach ($models->get() as $model) {
            return $model;
        }
    }
    public function getPollingUnitResult(PollingUnit $pollingUnit, $id)
    {
        foreach ($pollingUnit->results as $result) {
            if($id == $result->type_id){
                return $result;
            }
        }
    }
    public function getResultCount($result)
    {
        foreach ($result->get() as $result) {
            return $result->collation->resultCount;
        }
    }
    public function lgaGovernorCount($result)
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
    public function lgaAssemblyCount($result)
    {
        foreach ($result->get() as $result) {
            $lga_id = $result->pollingUnit->ward->lga->id;
            foreach (LgaResultCount::where(['lga_id'=>$lga_id, 'type_id'=>2])->get() as $result) {
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
        $governor = null;
        $assembly = null;
        
        foreach ($pollingUnit->results as $result) {
            switch ($result->type_id) {
                case '1':
                    $governor = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid_vote,
                    ];
                    break;
                
                case '2':
                    $assembly = [
                        'pdp' => $result->pdp,
                        'apc' => $result->apc,
                        'other' => $result->other,
                        'invalid' => $result->invalid_vote,
                    ];
                    break;
                
                default:
                    break;
            }
        }
        return view('edit_result',['pollingUnit'=>$pollingUnits,'governor'=>$governor,'assembly'=>$assembly]);
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
