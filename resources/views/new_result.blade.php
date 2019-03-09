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
                            <legend style="color: seagreen">POLLING UNIT INFORMATION</legend>
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
                                <legend style="color: seagreen">GOVERNATORIAL ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('governor_apc')}}" name="governor_apc" placeholder="APC"><br>
                                @if ($errors->has('governor_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('governor_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('governor_pdp')}}" name="governor_pdp" placeholder="PDP"><br>
                                @if ($errors->has('governor_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('governor_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('governor_other')}}" name="governor_other" placeholder="OTHER"><br>
                                @if ($errors->has('governor_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('governor_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('governor_invalid_vote')}}" name="governor_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('governor_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('governor_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            <fieldset>
                                <legend style="color: seagreen">HOUSE OF ASSEMBLY ELECTION RESULT</legend>
                                <input class="form-control" type="text" value="{{old('assembly_apc')}}" name="assembly_apc" placeholder="APC"><br>
                                @if ($errors->has('assembly_apc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assembly_apc') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('assembly_pdp')}}" name="assembly_pdp" placeholder="PDP"><br>
                                @if ($errors->has('assembly_pdp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assembly_pdp') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('assembly_other')}}" name="assembly_other" placeholder="OTHER"><br>
                                @if ($errors->has('assembly_other'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assembly_other') }}</strong>
                                    </span>
                                @endif
                                <input class="form-control" type="text" value="{{old('assembly_invalid_vote')}}" name="assembly_invalid_vote" placeholder="INVALID VOTE">
                                @if ($errors->has('assembly_invalid_vote'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assembly_invalid_vote') }}</strong>
                                    </span>
                                @endif
                            </fieldset>
                            
                        <input type="submit" class="btn btn-primary" value="Save">
                        <a class="btn btn-primary" href="/home">Go Back</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection    
        

