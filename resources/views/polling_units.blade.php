@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-12">
	    <div class="card">
	        <div class="card-body">
	            <form action="/edit_result" method="post">
	                @csrf
	                <select name="pollingUnit" class="form-control">
	                	<option>Select Polling Unit Code</option>
	                	@foreach($users as $user)
                            <option value="{{$user->polling_unit_id}}">{{$user->code}}</option>
	                	@endforeach
	                </select>
	                <br>
	                <button name="id" class="btn btn-success btn-block">Edit</button>
	            </form> <br>
	            <a class="btn btn-warning btn-block" href="/home">GO BACK</a>
	        </div>
	    </div>
	</div>
</div>
@endsection