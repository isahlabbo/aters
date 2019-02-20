@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">  
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header h3" style="color: white; background-color: seagreen; ">Insert Incidence</div>

                <div class="card-body">
                    <form action="/insert_incidence" method="post">
                        @csrf
                        <select class="form-control" name="pollingUnit">
                        	<option value="">POLLING UNIT</option>
                        	@foreach($pollingUnits as $pollingUnit)
                                <option value="{{$pollingUnit->id}}">{{$pollingUnit->name}}</option>
                        	@endforeach
                        </select><br>
                        <select class="form-control" name="incidence">
                        	<option value="">INCIDENCE</option>
                        	@foreach($incidences as $incidence)
                                <option value="{{$incidence->id}}">{{$incidence->name}}</option>
                        	@endforeach
                        </select><br>
                        <input type="submit" class="btn btn-primary" value="Insert">
                        <a class="btn btn-primary" href="/home">Go Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    
        

