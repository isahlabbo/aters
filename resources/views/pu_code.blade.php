@extends('layouts.app')

@section('content')
    @foreach($lga as $lga)
        <h1>{{$lga->name. ' Local Government'}}</h1>
    @endforeach
@endsection