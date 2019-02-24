@extends('layouts.app')
@section('head')
 <meta http-equiv=”refresh” content="5" />
@endsection

@section('content')
<div class="container">
        @if($user->returning == 1)
            @include('Dashboards.lga_returning')
        @elseif($user->ward_id != null)
            @include('Dashboards.ward_returning')
        @elseif($user->center_id != null)
        <div class="h1 alert alert-success">{{$user->center->name.' INCIDENCE MANAGEMENT DASHBOARD'}}</div>
        <div class="h1 alert alert-danger">{{'YOU HAVE ('.$availableIncidence.') UNRESOLVE INCIDENCE'}}</div>
        @foreach($lgas as $lga)
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3"  style="color: white; background-color: seagreen">{{strtoupper($lga->name). ' LOCAL GOVERNMENT'}}</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($lga->wards as $ward)
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header h3"  style="color: white; background-color: seagreen">{{strtoupper($ward->name). ' WARD'}}
                                        </div>
                                        <div class="card-body">
                                            @foreach($ward->pollingUnits as $pollingUnit)
                                            <div class="row" >
                                                @foreach($pollingUnit->pollingUnitIncidences as $incidence)
                                                    @if($incidence->incidence->resolve == 0)
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-header h4"  style="color: white; background-color: red">{{'NEW INCIDENCE'}}
                                                                <form method="post" action="/edit_incidence">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$incidence->id}}">
                                                                    <input type="submit" value="Edit Incidence" class="btn btn-danger" name="">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            @endforeach
                                            <form method="post" action="/ward_incidence">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$ward->id}}">
                                                <input type="submit" value="Insert Incidence" class="btn btn-success" name="">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @elseif($user->collation_id != null)
        <div class="alert alert-success">SOKOTO APC 2019 ELECTION DASHBOARD COLLATION CENTER </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h3"  style="color: white; background-color: seagreen">{{$presidential['name']}}</div>
                    <div class="card-body">
                        <table class="table table->responsive">
                            <thead>
                                <tr>
                                    <th>Registered Voters</th>
                                    <th>Acredited Voters</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$presidential['result']['registered'] == 0 ? 'Not Available' : $presidential['result']['registered']}}
                                    </td>
                                    <td>{{$presidential['result']['acredited'] == 0 ? 'Not Available' : $presidential['result']['acredited']}}
                                    </td>
                                    <td>{{$presidential['result']['apc'] == 0 ? 'Not Available' : $presidential['result']['apc']}}
                                    </td>
                                    <td>{{$presidential['result']['pdp'] == 0 ? 'Not Available' : $presidential['result']['pdp']}}
                                    </td>
                                    <td>{{$presidential['result']['other'] == 0 ? 'Not Available' : $presidential['result']['other']}}
                                    </td>
                                    <td>{{$presidential['result']['apc']+$presidential['result']['pdp']+$presidential['result']['other'] == 0 ? 'Not Available' : $presidential['result']['apc']+$presidential['result']['pdp']+$presidential['result']['other']}}
                                    </td>
                                    <td>{{$presidential['result']['invalid'] == 0 ? 'Not Available' : $presidential['result']['invalid']}}
                                    </td>
                                    <td>{{$presidential['result']['invalid']+$presidential['result']['apc']+$presidential['result']['pdp']+$presidential['result']['other'] == 0 ? 'Not Available' : $presidential['result']['invalid']+$presidential['result']['apc']+$presidential['result']['pdp']+$presidential['result']['other']}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h3"  style="color: white; background-color: seagreen">SENATORIAL</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($senatorial as $senatorial)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header h3"  style="color: white; background-color: seagreen">{{$senatorial['name']}}</div>
                                    <div class="card-body">
                                        <table class="table table->responsive">
                                            <thead>
                                                <tr>
                                                    <th>Registered Voters</th>
                                                    <th>Acredited Voters</th>
                                                    <th>APC</th>
                                                    <th>PDP</th>
                                                    <th>Others</th>
                                                    <th>Valid Votes</th>
                                                    <th>Invalid Votes</th>
                                                    <th>Total Votes Cast</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$senatorial['result']['registered'] == 0 ? 'Not Available' : $senatorial['result']['registered']}}
                                                    </td>
                                                    <td>{{$senatorial['result']['acredited'] == 0 ? 'Not Available' : $senatorial['result']['acredited']}}
                                                    </td>
                                                    <td>{{$senatorial['result']['apc'] == 0 ? 'Not Available' : $senatorial['result']['apc']}}
                                                    </td>
                                                    <td>{{$senatorial['result']['pdp'] == 0 ? 'Not Available' : $senatorial['result']['pdp']}}
                                                    </td>
                                                    <td>{{$senatorial['result']['other'] == 0 ? 'Not Available' : $senatorial['result']['other']}}
                                                    </td>
                                                    <td>{{$senatorial['result']['other']+$senatorial['result']['apc']+$senatorial['result']['pdp'] == 0 ? 'Not Available' : $senatorial['result']['other']+$senatorial['result']['apc']+$senatorial['result']['pdp']}}</td>
                                                    <td>{{$senatorial['result']['invalid'] == 0 ? 'Not Available' : $senatorial['result']['invalid']}}</td>
                                                    <td>{{$senatorial['result']['invalid']+$senatorial['result']['other']+$senatorial['result']['apc']+$senatorial['result']['pdp']}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h3"  style="color: white; background-color: seagreen">REPRESENTATIVE</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($representative as $representative)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header h3"  style="color: white; background-color: seagreen" >{{$representative['name']}}</div>
                                    <div class="card-body">
                                        <table class="table table->responsive">
                                            <thead>
                                                <tr>
                                                    <th>Registered Voters</th>
                                                    <th>Acredited Voters</th>
                                                    <th>APC</th>
                                                    <th>PDP</th>
                                                    <th>Others</th>
                                                    <th>Valid Votes</th>
                                                    <th>Invalid Votes</th>
                                                    <th>Total Votes Cast</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    {{$representative['result']['registered'] == 0 ? 'Not Available' : $representative['result']['registered']}}</td>

                                                    <td>{{$representative['result']['acredited'] == 0 ? 'Not Available' : $representative['result']['acredited']}}</td>

                                                    <td>{{$representative['result']['apc'] == 0 ? 'Not Available' : $representative['result']['apc']}}
                                                    </td>

                                                    <td>{{$representative['result']['pdp'] == 0 ? 'Not Available' : $representative['result']['pdp']}}
                                                    </td>

                                                    <td>{{$representative['result']['other'] == 0 ? 'Not Available' : $representative['result']['other']}}
                                                    </td>

                                                    <td>{{$representative['result']['other']+$representative['result']['apc']+$representative['result']['pdp'] == 0 ? 'Not Available' : $representative['result']['other']+$representative['result']['apc']+$representative['result']['pdp']}}
                                                    </td>

                                                    <td>{{$representative['result']['invalid'] == 0 ? 'Not Available' : $representative['result']['invalid']}}</td>

                                                    <td>{{$representative['result']['invalid']+$representative['result']['other']+$representative['result']['apc']+$representative['result']['pdp']== 0 ? 'Not Available' : $representative['result']['invalid']+$representative['result']['other']+$representative['result']['apc']+$representative['result']['pdp']}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($user->lga_id != null)
        <div class="alert alert-success h3" >{{$user->lga->name.' Local Governement 2019 Election Report'}}</div>
        <div class="row justify-content-center">
            @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td width="300">Local Government Name</td>
                                <td>{{$user->lga->name}}</td>
                            </tr>
                            <tr>
                                <td>No Of Registered Votes</td>
                                <td>{{$register == 0 ? 'Not Available' : $register}}</td>
                            </tr>
                            <tr>
                                <td>No Of Wards</td>
                                <td>{{count($user->lga->wards)}}</td>
                            </tr> 
                            <tr>
                                <td>No Of Polling Units</td>
                                <td>{{$pollingUnits}}</td>
                            </tr> 
                            <tr>
                                <td>No Of Available Polling Units Results</td>
                                <td>{{$user->lga->availableResult()}}</td>
                            </tr>    
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h2" style="color: white; background-color: seagreen">{{'Summary'}}</div>
                    <div class="card-body">
                        <span class="h3" style="color: seagreen">Presidential</span>
                        <table class="table table-default table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Voters</th>
                                    <th>Acredited Voters</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$summary['presidential'][0]->registered == 0 ? 'Not Available' : $summary['presidential'][0]->registered}}</td>

                                    <td>{{$summary['presidential'][0]->acredited == 0 ? 'Not Available' : $summary['presidential'][0]->acredited}}</td>

                                    <td>{{$summary['presidential'][0]->apc == 0 ? 'Not Available' : $summary['presidential'][0]->apc}}</td>

                                    <td>{{$summary['presidential'][0]->pdp == 0 ? 'Not Available' : $summary['presidential'][0]->pdp}}</td>

                                    <td>{{$summary['presidential'][0]->other == 0 ? 'Not Available' : $summary['presidential'][0]->other}}</td>

                                    <td>{{$summary['presidential'][0]->valid == 0 ? 'Not Available' : $summary['presidential'][0]->valid}}</td>

                                    <td>{{$summary['presidential'][0]->invalid == 0 ? 'Not Available' : $summary['presidential'][0]->invalid}}</td>

                                    <td>{{$summary['presidential'][0]->valid + $summary['presidential'][0]->invalid == 0 ? 'Not Available' : $summary['presidential'][0]->valid + $summary['presidential'][0]->invalid}}</td>

                                </tr>
                                

                            </tbody>
                        </table>
                        <span class="h3" style="color: seagreen">Senatorial</span>
                        <table class="table table-default table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Voters</th>
                                    <th>Acredited Voters</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$summary['senatorial'][0]->registered == 0 ? 'Not Available' : $summary['senatorial'][0]->registered}}</td>

                                    <td>{{$summary['senatorial'][0]->acredited == 0 ? 'Not Available' : $summary['senatorial'][0]->acredited}}</td>

                                    <td>{{$summary['senatorial'][0]->apc == 0 ? 'Not Available' : $summary['senatorial'][0]->apc}}</td>

                                    <td>{{$summary['senatorial'][0]->pdp == 0 ? 'Not Available' : $summary['senatorial'][0]->pdp}}</td>

                                    <td>{{$summary['senatorial'][0]->other == 0 ? 'Not Available' : $summary['senatorial'][0]->other}}</td>

                                    <td>{{$summary['senatorial'][0]->valid == 0 ? 'Not Available' : $summary['senatorial'][0]->valid}}</td>

                                    <td>{{$summary['senatorial'][0]->invalid == 0 ? 'Not Available' : $summary['senatorial'][0]->invalid}}</td>

                                    <td>{{$summary['senatorial'][0]->valid + $summary['senatorial'][0]->invalid == 0 ? 'Not Available' : $summary['senatorial'][0]->valid + $summary['senatorial'][0]->invalid}}</td>
                                </tr>
                                

                            </tbody>
                        </table>
                        <span class="h3" style="color: seagreen">Representative</span>
                        <table class="table table-default table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Voters</th>
                                    <th>Acredited Voters</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Others</th>
                                    <th>Valid Votes</th>
                                    <th>Invalid Votes</th>
                                    <th>Total Votes Cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$summary['representative'][0]->registered == 0 ? 'Not Available' : $summary['representative'][0]->registered}}</td>

                                    <td>{{$summary['representative'][0]->acredited == 0 ? 'Not Available' : $summary['representative'][0]->acredited}}</td>

                                    <td>{{$summary['representative'][0]->apc == 0 ? 'Not Available' : $summary['representative'][0]->apc}}</td>

                                    <td>{{$summary['representative'][0]->pdp == 0 ? 'Not Available' : $summary['representative'][0]->pdp}}</td>

                                    <td>{{$summary['representative'][0]->other == 0 ? 'Not Available' : $summary['representative'][0]->other}}</td>

                                    <td>{{$summary['representative'][0]->valid == 0 ? 'Not Available' : $summary['representative'][0]->valid}}</td>

                                    <td>{{$summary['representative'][0]->invalid == 0 ? 'Not Available' : $summary['representative'][0]->invalid}}</td>

                                    <td>{{$summary['representative'][0]->valid + $summary['representative'][0]->invalid == 0 ? 'Not Available' : $summary['representative'][0]->valid + $summary['representative'][0]->invalid}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @foreach($user->lga->wards as $ward)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header h3"  style="background-color: seagreen;color:white">{{$ward->name.' Ward'}} {{count($ward->pollingUnits).' POLLING UNITS'}}</div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                 $count = 1 
                                 ?>
                            @foreach($ward->pollingUnits as $pollingUnit)
                                
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" style="background-color: seagreen; color: white">{{$pollingUnit->name. ' POLLING UNIT'}} {{'AGENT CODE '. $pollingUnit->user->code}} {{'POLLING UNIT CODE '. '0'.$count++}}</div>
                                        <div class="card-body">
                                            @foreach($pollingUnit->results as $result)
                                            @if($result->type_id == 1)
                                            <span class="h3" style="color: seagreen;">Presidential</span>
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Voters</th>
                                                        <th>Accredited Voters</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>Valid Votes</th>
                                                        <th>Invalid Votes</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                                        <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                                        <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                                        <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                                        <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                                        <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                                        <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                                        <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @elseif($result->type_id == 2)
                                            <span class="h3" style="color: seagreen">Senatorial</span>
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Voters</th>
                                                        <th>Accredited Voters</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>Valid</th>
                                                        <th>Invalid</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                         <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                                        <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                                        <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                                        <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                                        <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                                        <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                                        <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                                        <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @else
                                            <span class="h3" style="color: seagreen">Representatives</span>
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Voters</th>
                                                        <th>Accredited Voters</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>Valid</th>
                                                        <th>Invalid</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                                        <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                                        <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                                        <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                                        <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                                        <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                                        <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                                        <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @endif
                                            @endforeach
                                            @if($pollingUnit->submitted() == false)
                                            <form action="/add_result" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$pollingUnit->id}}">
                                                <input type="submit" class="btn btn-primary" value="Insert Result" >
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach 
                            </div>   
                        </div>
                    </div>
                </div>
        
            @endforeach
        </div>
        @else
        <div class="row justify-content-center">
            <div class="alert alert-success h4" >{{$user->pollingUnit->name.' APC AGENT'}}</div>
            @if($user->pollingUnit->registered == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3" style="background-color: seagreen; color: white;">How many Voters Registered</div>
                    <div class="card-body">
                        <form action="/registered" method="post">
                            @csrf
                            <input class="form-control" type="text" value="{{old('registered')}}" name="registered" placeholder="number of registered voters"><br>

                                @if ($errors->has('registered'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('registered') }}</strong>
                                    </span>
                                @endif
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @elseif($user->pollingUnit->acredited == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3"style="background-color: seagreen; color: white;">How many Voters are accredated</div>
                    <div class="card-body">
                        <form action="/accredited" method="post">
                            @csrf
                            <input class="form-control" type="text" value="{{old('acredited')}}" name="acredited" placeholder="number of accredated voters"><br>
                                @if ($errors->has('acredited'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('acredited') }}</strong>
                                    </span>
                                @endif
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @include('incidence')
           @elseif($submitted == false)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3" style="background-color: seagreen; color: white;">SEND RESULT</div>

                    <div class="card-body">
                        <form action="/result" method="post">
                            @csrf
                            <fieldset>
                                <legend style="color: seagreen">PRESIDENTIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('presidential_apc')}}" name="presidential_apc" placeholder="APC"><br>
                                @if ($errors->has('presidential_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('presidential_pdp')}}" name="presidential_pdp" placeholder="PDP"><br>
                                @if ($errors->has('presidential_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('presidential_other')}}" name="presidential_other" placeholder="OTHER"><br>
                                @if ($errors->has('presidential_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('presidential_invalid_vote')}}" name="presidential_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('presidential_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">SENATORIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('senatorial_apc')}}" name="senatorial_apc" placeholder="APC"><br>
                                @if ($errors->has('senatorial_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('senatorial_pdp')}}" name="senatorial_pdp" placeholder="PDP"><br>
                                @if ($errors->has('senatorial_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('senatorial_other')}}" name="senatorial_other" placeholder="OTHER"><br>
                                @if ($errors->has('senatorial_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('senatorial_invalid_vote')}}" name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('senatorial_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">REPRESENTATIVE ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('representative_apc')}}" name="representative_apc" placeholder="APC"><br>
                                @if ($errors->has('representative_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('representative_pdp')}}" name="representative_pdp" placeholder="PDP"><br>
                                @if ($errors->has('representative_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('representative_other')}}" name="representative_other" placeholder="OTHER"><br>
                                @if ($errors->has('representative_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('representative_invalid_vote')}}" name="representative_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('representative_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @include('incidence')
            @else
                <div class="alert alert-success h4" >{{'Thanks for using our Applictaion in 2019 '}}</div>  
            @endif
        </div>    
        @endif
</div>
@endsection
