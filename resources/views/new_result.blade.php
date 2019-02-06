@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">  
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header h3">Add Result</div>

                <div class="card-body">
                    <form action="/result" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <input class="form-control" type="text" name="apc" placeholder="APC"><br>
                        <input class="form-control" type="text" name="pdp" placeholder="PDP"><br>
                        <input class="form-control" type="text" name="other" placeholder="OTHER"><br>
                        <input class="form-control" type="text" name="valid_vote" placeholder="VALID VOTE"><br>
                        <input class="form-control" type="text" name="invalid_vote" placeholder="INVALID VOTE"><br>
                        <input type="submit" class="btn btn-primary" value="Send">
                        <a class="btn btn-primary" href="/home">Go Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    
        

