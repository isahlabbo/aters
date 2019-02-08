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
                        <fieldset>
                            <legend>POLLING UNIT INFORMATION</legend>
                            <input class="form-control" type="text" name="registered" placeholder="REGISTERED VOTES"><br>
                            <input class="form-control" type="text" name="acredited" placeholder="ACREDITED VOTES"><br>
                        </fieldset>
                        <fieldset>
                            <legend>PRESIDENTIAL ELECTION RESULT</legend>
                            <input class="form-control" type="text" name="presidential_apc" placeholder="APC"><br>
                            <input class="form-control" type="text" name="presidential_pdp" placeholder="PDP"><br>
                            <input class="form-control" type="text" name="presidential_other" placeholder="OTHER"><br>
                            <input class="form-control" type="text" name="presidential_invalid_vote" placeholder="INVALID VOTE">
                        </fieldset>
                        <fieldset>
                            <legend>SENATORIAL ELECTION RESULT</legend>
                            <input class="form-control" type="text" name="senatorial_apc" placeholder="APC"><br>
                            <input class="form-control" type="text" name="senatorial_pdp" placeholder="PDP"><br>
                            <input class="form-control" type="text" name="senatorial_other" placeholder="OTHER"><br>
                            <input class="form-control" type="text" name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                        </fieldset>
                        <fieldset>
                            <legend>REPRESENTATIVE ELECTION RESULT</legend>
                            <input class="form-control" type="text" name="representative_apc" placeholder="APC"><br>
                            <input class="form-control" type="text" name="representative_pdp" placeholder="PDP"><br>
                            <input class="form-control" type="text" name="representative_other" placeholder="OTHER"><br>
                            <input class="form-control" type="text" name="representative_invalid_vote" placeholder="INVALID VOTE">
                        </fieldset>
                        <input type="submit" class="btn btn-primary" value="Send">
                        <a class="btn btn-primary" href="/home">Go Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    
        

