@extends('layouts.app')

@section('content')
<div class="container">
	<div class="alert alert-success h3">{{'SOKOTO STATE LOCAL GOVERNMENTS WARD APC 2019 ELECTION RESULT DASHBOARD'}}</div>
	<div class="row">
	    <div class="col-md-12">
	    	@foreach($wards as $ward)
	        <div class="card">
	        	<div class="card-header h3" style="color: white; background-color: seagreen">{{$count++.' '.strtoupper($ward->name).' WARD '.strtoupper($ward->lga->name).' LOCAL GOVERNMENT'}}</div>
	            <div class="card-body">          
	                @foreach($ward->returningResults as $result)
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
	                                <td>{{$result->registered == 0 ? 'Not Available' : $result->registered}}</td>
	                                <td>{{$result->acredited == 0 ? 'Not Available' : $result->acredited}}</td>
	                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
	                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
	                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
	                                <td>{{$result->pdp + $result->apc + $result->other == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other}}</td>
	                                <td>{{$result->invalid == 0 ? 'Not Available' : $result->invalid}}</td>
	                                <td>{{$result->pdp + $result->apc + $result->other + $result->invalid == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other + $result->invalid}}</td>
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
	                                <th>Valid Votes</th>
	                                <th>Invalid Votes</th>
	                                <th>Total Votes Cast</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td>{{$result->registered == 0 ? 'Not Available' : $result->registered}}</td>
	                                <td>{{$result->acredited == 0 ? 'Not Available' : $result->acredited}}</td>
	                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
	                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
	                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
	                                <td>{{$result->pdp + $result->apc + $result->other == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other}}</td>
	                                <td>{{$result->invalid == 0 ? 'Not Available' : $result->invalid}}</td>
	                                <td>{{$result->pdp + $result->apc + $result->other + $result->invalid == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other + $result->invalid}}</td>
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
	                                <th>Valid Votes</th>
	                                <th>Invalid Votes</th>
	                                <th>Total Votes Cast</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td>{{$result->registered == 0 ? 'Not Available' : $result->registered}}</td>
	                                <td>{{$result->acredited == 0 ? 'Not Available' : $result->acredited}}</td>
	                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
	                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
	                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
	                                <td>{{$result->pdp + $result->apc + $result->other == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other}}</td>
	                                <td>{{$result->invalid == 0 ? 'Not Available' : $result->invalid}}</td>
	                                <td>{{$result->pdp + $result->apc + $result->other + $result->invalid == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other + $result->invalid}}</td>
	                            </tr>
	                        </tbody>
	                    </table>
	                    @endif
	                @endforeach  
	            </div>
	        </div><br>
	        @endforeach   
	    </div>
	</div>
</div>
@stop