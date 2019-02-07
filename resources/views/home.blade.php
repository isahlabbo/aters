@extends('layouts.app')

@section('content')
<div class="container">
    
        @if($user->lga_id != null)
        <div class="alert alert-success h3" >{{$user->lga->name.' Local Governement 2019 Election Report'}}</div>
        <div class="row justify-content-center">
            @if(session('message'))
                {{session('message')}}
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
                                <td>{{$register}}</td>
                            </tr>
                            <tr>
                                <td>No Of Wards</td>
                                <td>{{count($user->lga->wards)}}</td>
                            </tr> 
                            <tr>
                                <td>No Of Polling Units</td>
                                <td>{{$pollingUnits}}</td>
                            </tr>   
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h2">{{'Summary'}}</div>
                    <div class="card-body">
                        <table class="table table-default table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Accredited</th>
                                    <th>APC</th>
                                    <th>PDP</th>
                                    <th>Other</th>
                                    <th>valid votes</th>
                                    <th>invalid votes</th>
                                    <th>Total Votes cast</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>{{$summary['acredited']}}</td>
                                    <td>{{$summary['apc']}}</td>
                                    <td>{{$summary['pdp']}}</td>
                                    <td>{{$summary['other']}}</td>
                                    <td>{{$summary['valid_vote']}}</td>
                                    <td>{{$summary['invalid_vote']}}</td>
                                    <td>{{$summary['invalid_vote']+$summary['valid_vote']}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{{$summary['acredited']}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @foreach($user->lga->wards as $ward)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header h3">{{$ward->name.' Ward'}}</div>
                      
                        <div class="card-body">
                            <div class="row">
                            @foreach($ward->pollingUnits as $pollingUnit)    
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">{{$pollingUnit->name. ' POLLING UNITt'}}</div>
                                        <div class="card-body">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
                                                        <th>APC</th>
                                                        <th>PDP</th>
                                                        <th>Others</th>
                                                        <th>valid</th>
                                                        <th>invalid</th>
                                                        <th>Total Votes Cast</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$pollingUnit->votes}}</td>
                                                        <td>{{$pollingUnit->votes}}</td>
                                                        <td>{{$pollingUnit->result->apc}}</td>
                                                        <td>{{$pollingUnit->result->pdp}}</td>
                                                        <td>{{$pollingUnit->result->other}}</td>
                                                        <td>{{$pollingUnit->result->valid}}</td>
                                                        <td>{{$pollingUnit->result->invalid}}</td>
                                                        <td>{{$pollingUnit->result->invalid+$pollingUnit->result->valid}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>{{round(($pollingUnit->result->apc/($pollingUnit->votes == 0 ? $pollingUnit->votes + 1 : $pollingUnit->votes + 0)) * 100, 1)}} %</td>
                                                        <td>{{round(($pollingUnit->result->pdp/($pollingUnit->votes == 0 ? $pollingUnit->votes + 1 : $pollingUnit->votes + 0)) * 100, 1)}}</td>
                                                        <td>{{round(($pollingUnit->result->other/($pollingUnit->votes == 0 ? $pollingUnit->votes + 1 : $pollingUnit->votes + 0)) * 100, 1)}}</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @if($pollingUnit->votes == 0 && $pollingUnit->result->apc == 0)
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
            <div class="alert alert-success h4" >{{$user->pollingUnit->name.' APC Agent'}}</div>
            @if($user->pollingUnit->register == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3">How many Voters Registered</div>
                    <div class="card-body">
                        <form action="/accredited" method="post">
                            @csrf
                            <input class="form-control" type="text" name="Registered" placeholder="number of accredated voters"><br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            @elseif($user->pollingUnit->acredited == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3">How many Voters are accredated</div>
                    <div class="card-body">
                        <form action="/accredited" method="post">
                            @csrf
                            <input class="form-control" type="text" name="accredited" placeholder="number of accredated voters"><br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3">Report incidence</div>

                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <button class="btn btn-danger btn-block">Violence</button>
                            <button class="btn btn-danger btn-block">Valot Snatching</button>
                            <button class="btn btn-danger btn-block">Vote Saling</button>
                            <button class="btn btn-danger btn-block">Vote Buying</button>
                            <button class="btn btn-danger btn-block">Absence of Security</button>
                            <button class="btn btn-danger btn-block">Late Arrival Of Material Or Staff</button>
                        </form>
                    </div>
                </div>
            </div>
           @elseif($user->pollingUnit->result->apc == 0)
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3">Send Result</div>

                    <div class="card-body">
                        <form action="/result" method="post">
                            @csrf
                            <fieldset>
                                <input class="form-control" type="text" name="apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="valid_vote" placeholder="VALID VOTE"><br><input class="form-control" type="text" name="invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <fieldset>
                                <input class="form-control" type="text" name="apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="valid_vote" placeholder="VALID VOTE"><br><input class="form-control" type="text" name="invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <fieldset>
                                <input class="form-control" type="text" name="apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="valid_vote" placeholder="VALID VOTE"><br><input class="form-control" type="text" name="invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header h3">Report incidence</div>

                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <button class="btn btn-danger btn-block">Violence</button>
                            <button class="btn btn-danger btn-block">Valot Snatching</button>
                            <button class="btn btn-danger btn-block">Vote Saling</button>
                            <button class="btn btn-danger btn-block">Vote Buying</button>
                            <button class="btn btn-danger btn-block">Absence of Security</button>
                            <button class="btn btn-danger btn-block">Late Arrival Of Material Or Staff</button>
                        </form>
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-success h4" >{{'Thanks for using our Applictaion in 2019 '}}</div>  
            @endif
        </div>    
        @endif
</div>
@endsection
