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
                            <input class="form-control" type="text" value="{{old('registered')}}" name="registered" placeholder="REGISTERED VOTES"><br>
                                @if ($errors->has('registered'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('registered') }}</strong>
                                    </span>
                                @endif
                            <input class="form-control" type="text" value="{{old('acredited')}}" name="acredited" placeholder="ACREDITED VOTES"><br>
                                @if ($errors->has('acredited'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('acredited') }}</strong>
                                    </span>
                                @endif
                        </fieldset>
                        <fieldset>
                                <legend style="color: seagreen">PRESIDENTIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('presidential_apc')}}" name="presidential_apc" placeholder="APC"><br>
                                @if ($errors->has('presidential_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('presidential_pdp')}}" name="presidential_pdp" placeholder="PDP"><br>
                                @if ($errors->has('presidential_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('presidential_other')}}" name="presidential_other" placeholder="OTHER"><br>
                                @if ($errors->has('presidential_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('presidential_invalid_vote')}}" name="presidential_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('presidential_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presidential_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">SENATORIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('senatorial_apc')}}" name="senatorial_apc" placeholder="APC"><br>
                                @if ($errors->has('senatorial_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('senatorial_pdp')}}" name="senatorial_pdp" placeholder="PDP"><br>
                                @if ($errors->has('senatorial_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('senatorial_other')}}" name="senatorial_other" placeholder="OTHER"><br>
                                @if ($errors->has('senatorial_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('senatorial_invalid_vote')}}" name="senatorial_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('senatorial_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senatorial_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">REPRESENTATIVE ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('representative_apc')}}" name="representative_apc" placeholder="APC"><br>
                                @if ($errors->has('representative_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('representative_pdp')}}" name="representative_pdp" placeholder="PDP"><br>
                                @if ($errors->has('representative_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('representative_other')}}" name="representative_other" placeholder="OTHER"><br>
                                @if ($errors->has('representative_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('representative_invalid_vote')}}" name="representative_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('representative_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representative_invalid_vote') }}</strong>
                                    </span>
                                @endif
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
        

