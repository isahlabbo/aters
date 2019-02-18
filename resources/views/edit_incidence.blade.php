@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-12">
	    <div class="card">
	        <div class="card-body">
	        	<table>
	        		<tr>
	        			<td>LGA</td>
	        			<td>{{$incidence->pollingUnit->ward->lga->name}}</td>
	        		</tr>
	        		<tr>
	        			<td>WARD</td>
	        			<td>{{$incidence->pollingUnit->ward->name}}</td>
	        		</tr>
	        		<tr>
	        			<td>POLLING UNIT</td>
	        			<td>{{$incidence->pollingUnit->name}}</td>
	        		</tr>
	        	</table>
	            <form action="/resolve_incidence" method="post">
	                @csrf
	                <button name="id" class="btn btn-danger btn-block" value="{{$incidence->id}}">Resolved</button>
	            </form>
	            <a href="/home">GO BACK</a>
	        </div>
	    </div>
	</div>
</div>

@endsection