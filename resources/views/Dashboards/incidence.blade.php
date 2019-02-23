@extends('layouts.app')

@section('content')
<div class="container">
	<div class="alert alert-success h3">{{'SOKOTO STATE LOCAL GOVERNMENTS WARD APC 2019 ELECTION INCIDENCES'}}</div>
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-body">          
	                
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>LGA</th>
                                <th>WARD</th>
                                <th>POLLING UNIT</th>
                                <th>INCIDENCE</th>
                                <th>DURATION</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($incidences as $incidence)
                            <tr>
                                <td>{{$count++}}</td> 
                                <td>{{$incidence->pollingUnit->ward->lga->name}}</td> 
                                <td>{{$incidence->pollingUnit->ward->name}}</td> 
                                <td>{{$incidence->pollingUnit->ward->name}}</td> 
                                <td>{{$incidence->incidence->name}}</td> 
                                <td>{{$incidence->duration()}}</td> 
                                <td>{{$incidence->status()}}</td>  
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="/home">VIEW RESULT</a>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@stop