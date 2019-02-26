@extends('layouts.app')

@section('content')
<div class="container">
	        
	            @foreach($lgas as $lga)
	            <?php $ward_count = 1; ?>
	               <h4>{{'SUMMARY OF '.strtoupper($lga->name)}} LOCAL GOVERMNENT 2019 PRESIDENTIAL FROM SITUATION ROOM TEMPLATE</h1>
	               @foreach($lga->wards as $ward)
	               <?php $count = 1; ?>
	               {{'0'.$ward_count++.' '.strtoupper($ward->name).' WARD '}}
	                    <table class="table">
	                        <thead>
	                            <tr>
	                                <th>S/N</th>
	                                <th>LGA</th>
	                                <th>WARD</th>
	                                <th>ELECTION</th>
	                                <th>APC</th>
	                                <th>PDP</th>
	                                <th>OTHER</th>
	                                <th>VALID VOTES</th>
	                                <th>TOTAL VOTES CAST</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	@foreach($ward->returningResults as $result)
	                            <tr>
	                                <td>{{$count++}}</td> 
	                                <td>{{strtoupper($lga->name)}}</td> 
	                                <td>{{strtoupper($ward->name)}}</td> 
	                                <td>{{strtoupper($result->type->name)}}</td> 
	                                <td>{{$result->apc}}</td> 
	                                <td>{{$result->pdp}}</td> 
	                                <td>{{$result->other}}</td> 
	                                <td>{{$result->apc+$result->pdp+$result->other}}</td> 
	                                <td>{{$result->apc+$result->pdp+$result->other+$result->invalid}}</td> 
	                            </tr>
	                            @endforeach 
	                             
	                        </tbody>
	                    </table>
	            @endforeach
	            {{'SUMMARY'}}
	            <table class="table">
	            	<thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>APC</th>
                            <th>PDP</th>
                            <th>OTHER</th>
                            <th>VALID VOTES</th>
                            <th>TOTAL VOTES CAST</th>
                        </tr>
                    </thead>
	            	<tbody>
	            	<tr>
                        <td>{{'PRESIDENTIAL TOTAL'}}</td> 
                        <td></td> 
                        <td></td> 
                        <td></td> 
                        <td>{{$lga->presidential()['apc']}}</td> 
                        <td>{{$lga->presidential()['pdp']}}</td> 
                        <td>{{$lga->presidential()['other']}}</td> 
                        <td>{{$lga->presidential()['apc']+$lga->presidential()['pdp']+$lga->presidential()['other']}}</td> 
                        <td>{{$lga->presidential()['apc']+$lga->presidential()['pdp']+$lga->presidential()['other']+$lga->presidential()['invalid']}}</td> 
                    </tr>
                    <tr>
                        <td>{{'SENATORIAL TOTAL'}}</td> 
                        <td></td> 
                        <td></td> 
                        <td></td> 
                        <td>{{$lga->senatorial()['apc']}}</td> 
                        <td>{{$lga->senatorial()['pdp']}}</td> 
                        <td>{{$lga->senatorial()['other']}}</td> 
                        <td>{{$lga->senatorial()['apc']+$lga->senatorial()['pdp']+$lga->senatorial()['other']}}</td> 
                        <td>{{$lga->senatorial()['apc']+$lga->senatorial()['pdp']+$lga->senatorial()['other']+$lga->senatorial()['invalid']}}</td> 
                    </tr>
                    <tr>
                        <td>{{'REPRESENTATIVE TOTAL'}}</td> 
                        <td></td> 
                        <td></td> 
                        <td></td> 
                        <td>{{$lga->representative()['apc']}}</td> 
                        <td>{{$lga->representative()['pdp']}}</td> 
                        <td>{{$lga->representative()['other']}}</td> 
                        <td>{{$lga->representative()['apc']+$lga->representative()['pdp']+$lga->representative()['other']}}</td> 
                        <td>{{$lga->representative()['apc']+$lga->representative()['pdp']+$lga->representative()['other']+$lga->representative()['invalid']}}</td>  
                    </tr> 
                    </tbody>
	            </table> 
	        @endforeach   
	   
@stop