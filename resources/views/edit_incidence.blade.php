@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-12">
	    <div class="card">
	        <div class="card-body">
	        	<table>
	        		<tr>
	        			<td>LGA</td>
	        			<td>{{strtoupper($incidence->pollingUnit->ward->lga->name)}}</td>
	        		</tr>
	        		<tr>
	        			<td>WARD</td>
	        			<td>{{strtoupper($incidence->pollingUnit->ward->name)}}</td>
	        		</tr>
	        		<tr>
	        			<td width="220">POLLING UNIT</td>
	        			<td>{{strtoupper($incidence->pollingUnit->name)}}</td>
	        		</tr>
	        		<tr>
	        			<td>INCIDENCE TYPE</td>
	        			<td>{{strtoupper($incidence->incidence->name)}}</td>
	        		</tr>
	        		<tr>
	        			<td>DURATION</td>
	        			<td>{{$incidence->duration()}}</td>
	        		</tr>
	        	</table>
	            <form action="/resolve_incidence" method="post">
	                @csrf
	                <button name="id" class="btn btn-success btn-block" value="{{$incidence->id}}">Resolved</button>
	            </form> <br>
	            <a class="btn btn-warning btn-block" href="/home">GO BACK</a>
	        </div>
	    </div>
	</div>
</div>

@endsection