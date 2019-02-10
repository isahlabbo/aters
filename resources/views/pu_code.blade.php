@extends('layouts.app')

@section('content')
<table class="table table->default">
	<thead>
		<tr>
			<th>S/N</th>
			<th>LGA</th>
			<th>WARD</th>
			<th>PU</th>
			<th>PU AGENT CODE</th>
		</tr>
	</thead>
    @foreach($lga as $lga)
        @foreach($lga->wards as $ward)
	        @foreach($ward->pollingUnits as $pollingUnit)
	            <tbody>
	            	<tr>
	            		<th>{{$count++}}</th>
	            		<th>{{$lga->name}}</th>
	            		<th>{{$ward->name}}</th>
	            		<th>{{$pollingUnit->name}}</th>
	            		<th>{{$pollingUnit->user->code}}</th>
	            	</tr>
	            </tbody>
		    @endforeach
	    @endforeach
    @endforeach
 </table>    
@endsection