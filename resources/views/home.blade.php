@extends('layouts.app')

@section('content')
<div class="container">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

        @if($user->code == 'collation')
        <div class="alert alert-success">SOKOTO APC 2019 ELECTION DASHBOARD COLLATION CENTER</div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header h3"  style="color: white; background-color: seagreen">PRESIDENTIAL</div>
                    <div class="card-body">
                    @php
                        $presidentialChart = new App\Charts\ResultChart;
                        $presidentialChart->labels(['APC', 'PDP', 'OTHERS',]);
                        $presidentialChart->dataset('Presidential Result', 'pie',[
                            $presidential['apc'],
                            $presidential['pdp'],
                            $presidential['other']
                        ])->backgroundColor(['#6da252', '#00c0ef', '#F56954'])
                        ->fill(true);
                    @endphp
                    <div class="col md-12">
                        {!! $presidentialChart->container() !!}
                        {!! $presidentialChart->script() !!}
                    </div>
                        <table class="table table->responsive">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
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
                                    <td>{{$presidential['registered'] == 0 ? 'Not Available' : $presidential['registered']}}</td>
                                    <td>{{$presidential['acredited'] == 0 ? 'Not Available' : $presidential['acredited']}}</td>
                                    <td>{{$presidential['apc'] == 0 ? 'Not Available' : $presidential['apc']}}</td>
                                    <td>{{$presidential['pdp'] == 0 ? 'Not Available' : $presidential['pdp']}}</td>
                                    <td>{{$presidential['other'] == 0 ? 'Not Available' : $presidential['other']}}</td>
                                    <td>{{$presidential['other']+$presidential['apc']+$presidential['pdp'] == 0 ? 'Not Available' : $presidential['other']+$presidential['apc']+$presidential['pdp']}}</td>
                                    <td>{{$presidential['invalid'] == 0 ? 'Not Available' : $presidential['invalid']}}</td>
                                    <td>{{$presidential['invalid']+$presidential['other']+$presidential['apc']+$presidential['pdp'] == 0 ? 'Not Available' : $presidential['invalid']+$presidential['other']+$presidential['apc']+$presidential['pdp']}}</td>

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
                            @foreach($senatorial as $senate)
                            <div class="">
                                <div class="card">
                                    <div class="card-header h3"  style="color: white; background-color: seagreen">{{$senate['name']}}</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="card-body">
                                            @php 
                                                $chart = new App\Charts\ResultChart;
                                                $chart->labels(['APC', 'PDP', 'OTHERS',]);
                                                $chart->dataset('Presidential Result', 'pie',[
                                                    $senate['result']['apc'],
                                                    $senate['result']['pdp'],
                                                    $senate['result']['other']
                                                ])->backgroundColor(['#6da252', '#00c0ef', '#F56954'])
                                                ->fill(true);
                                            @endphp
                                            <div class="col md-12">
                                                {!! $chart->container() !!}
                                                {!! $chart->script() !!}
                                            </div>
                                        </div>
                                        <table class="table table->responsive">
                                            <thead>
                                                <tr>
                                                    <th>Registered Votes</th>
                                                    <th>Acredited</th>
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
                                                    <td>{{$senate['result']['registered'] == 0 ? 'Not Available' : $senate['result']['registered']}}</td>
                                                    <td>{{$senate['result']['acredited'] == 0 ? 'Not Available' : $senate['result']['acredited']}}</td>
                                                    <td>{{$senate['result']['apc'] == 0 ? 'Not Available' : $senate['result']['apc']}}</td>
                                                    <td>{{$senate['result']['pdp'] == 0 ? 'Not Available' : $senate['result']['pdp']}}</td>
                                                    <td>{{$senate['result']['other'] == 0 ? 'Not Available' : $senate['result']['other']}}</td>
                                                    <td>{{$senate['result']['apc']+$senate['result']['pdp']+$senate['result']['other'] == 0 ? 'Not Available' : $senate['result']['apc']+$senate['result']['pdp']+$senate['result']['other']}}</td>
                                                    <td>{{$senate['result']['invalid'] == 0 ? 'Not Available' : $senate['result']['invalid']}}</td>
                                                    <td>{{$senate['result']['invalid']+$senate['result']['apc']+$senate['result']['pdp']+$senate['result']['other'] == 0 ? 'Not Available' : $senate['result']['invalid']+$senate['result']['apc']+$senate['result']['pdp']+$senate['result']['other']}}</td>
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
                                         @php 
                                                $chart = new App\Charts\ResultChart;
                                                $chart->labels(['APC', 'PDP', 'OTHERS',]);
                                                $chart->dataset('Presidential Result', 'pie',[
                                                    $representative['result']['apc'],
                                                    $representative['result']['pdp'],
                                                    $representative['result']['other']
                                                ])->backgroundColor(['#6da252', '#00c0ef', '#F56954'])
                                                ->fill(true);
                                            @endphp
                                            <div class="col md-12">
                                                {!! $chart->container() !!}
                                                {!! $chart->script() !!}
                                            </div>
                                        <table class="table table->responsive">
                                            <thead>
                                                <tr>
                                                    <th>Registered Votes</th>
                                                    <th>Acredited</th>
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
                                                    <td>{{$representative['result']['registered'] == 0 ? 'Not Available' : $representative['result']['registered']}}</td>
                                                    <td>{{$representative['result']['acredited'] == 0 ? 'Not Available' : $representative['result']['acredited']}}</td>
                                                    <td>{{$representative['result']['apc'] == 0 ? 'Not Available' : $representative['result']['apc']}}</td>
                                                    <td>{{$representative['result']['pdp'] == 0 ? 'Not Available' : $representative['result']['pdp']}}</td>
                                                    <td>{{$representative['result']['other'] == 0 ? 'Not Available' : $representative['result']['other']}}</td>
                                                    <td>{{$representative['result']['apc']+$representative['result']['pdp']+$representative['result']['other'] == 0 ? 'Not Available' : $representative['result']['apc']+$representative['result']['pdp']+$representative['result']['other']}}</td>
                                                    <td>{{$representative['result']['invalid'] == 0 ? 'Not Available' : $representative['result']['invalid']}}</td>
                                                    <td>{{$representative['result']['invalid']+$representative['result']['apc']+$representative['result']['pdp']+$representative['result']['other'] == 0 ? 'Not Available' : $representative['result']['invalid']+$representative['result']['apc']+$representative['result']['pdp']+$representative['result']['other']}}</td>
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
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
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
                                    <td>{{$summary['registered'] == 0 ? 'Not Avalable' : $summary['registered']}}</td>

                                    <td>{{$summary['acredited'] == 0 ? 'Not Avalable' : $summary['acredited']}}</td>

                                    <td>{{$user->lga->result()['presidential']['apc'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['apc']}}</td>

                                    <td>{{$user->lga->result()['presidential']['pdp'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['pdp']}}</td>

                                    <td>{{$user->lga->result()['presidential']['other'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['other']}}</td>

                                    <td>{{$user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other']}}</td>

                                    <td>{{$user->lga->result()['presidential']['invalid'] == 0 ? 'Not Available' : $user->lga->result()['presidential']['invalid']}}</td>

                                    <td>{{$user->lga->result()['presidential']['invalid']+$user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other'] == 0 ? 'No Available' : $user->lga->result()['presidential']['invalid']+$user->lga->result()['presidential']['apc']+$user->lga->result()['presidential']['pdp']+$user->lga->result()['presidential']['other']}}</td>

                                </tr>


                            </tbody>
                        </table>
                        <span class="h3" style="color: white; background-color: seagreen">Senatorial</span>
                        <table class="table table-default table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
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
                                    <td>{{$summary['registered'] == 0 ? 'Not Avalable' : $summary['registered']}}</td>

                                    <td>{{$summary['acredited'] == 0 ? 'Not Avalable' : $summary['acredited']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['apc'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['apc']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['pdp'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['pdp']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['other'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['other']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['invalid'] == 0 ? 'Not Available' : $user->lga->result()['senatorial']['invalid']}}</td>

                                    <td>{{$user->lga->result()['senatorial']['invalid']+$user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other'] == 0 ? 'No Available' : $user->lga->result()['senatorial']['invalid']+$user->lga->result()['senatorial']['apc']+$user->lga->result()['senatorial']['pdp']+$user->lga->result()['senatorial']['other']}}</td>
                                </tr>


                            </tbody>
                        </table>
                        <span class="h3" style="color: seagreen">Representative</span>
                        <table class="table table-default table-responsive">
                            <thead>
                                <tr>
                                    <th>Registered Votes</th>
                                    <th>Acredited</th>
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
                                    <td>{{$summary['registered'] == 0 ? 'Not Avalable' : $summary['registered']}}</td>

                                    <td>{{$summary['acredited'] == 0 ? 'Not Avalable' : $summary['acredited']}}</td>

                                    <td>{{$user->lga->result()['representative']['apc'] == 0 ? 'Not Available' : $user->lga->result()['representative']['apc']}}</td>

                                    <td>{{$user->lga->result()['representative']['pdp'] == 0 ? 'Not Available' : $user->lga->result()['representative']['pdp']}}</td>

                                    <td>{{$user->lga->result()['representative']['other'] == 0 ? 'Not Available' : $user->lga->result()['representative']['other']}}</td>

                                    <td>{{$user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other'] == 0 ? 'Not Available' : $user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other']}}</td>

                                    <td>{{$user->lga->result()['representative']['invalid'] == 0 ? 'Not Available' : $user->lga->result()['representative']['invalid']}}</td>

                                    <td>{{$user->lga->result()['representative']['invalid']+$user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other'] == 0 ? 'No Available' : $user->lga->result()['representative']['invalid']+$user->lga->result()['representative']['apc']+$user->lga->result()['representative']['pdp']+$user->lga->result()['representative']['other']}}</td>
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
                            @foreach($ward->pollingUnits as $pollingUnit)
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" style="background-color: seagreen; color: white">{{$pollingUnit->name. ' POLLING UNIT'}} {{'CODE '. $pollingUnit->user->code}}</div>
                                        <div class="card-body">
                                            @foreach($pollingUnit->results as $result)
                                            @if($result->type_id == 1)
                                            <span class="h3" style="color: seagreen;">Presidential</span>
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
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
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
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
                                            <span class="h3" style="color: seagreen">Representative</span>
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Registered Votes</th>
                                                        <th>Accredited</th>
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
                        <form action="/accredited" method="post">
                            @csrf
                            <input class="form-control" type="text" name="registered" placeholder="number of registered voters"><br>
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
                            <input class="form-control" type="text" name="acredited" placeholder="number of accredated voters"><br>
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
                                <input class="form-control" type="text" name="presidential_apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="presidential_pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="presidential_other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="presidential_invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">SENATORIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" name="senatorial_apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="senatorial_pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="senatorial_other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">REPRESENTATIVE ELECTION RESULT</legend>
                                <input class="form-control" type="text" name="representative_apc" placeholder="APC"><br>
                                <input class="form-control" type="text" name="representative_pdp" placeholder="PDP"><br>
                                <input class="form-control" type="text" name="representative_other" placeholder="OTHER"><br>
                                <input class="form-control" type="text" name="representative_invalid_vote" placeholder="INVALID VOTE">
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