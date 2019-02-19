<div class="row">
@foreach($user->ward->pollingUnits as $pollingUnit)
    <div class="col-md-6">
        <div class="card">
            <div class="card-header h3"  style="background-color: seagreen;color:white">{{$pollingUnit->name.' POLLING UNITS'}} {{'CODE '. $pollingUnit->user->code}}</div>
            <div class="card-body">          
                @foreach($pollingUnit->results as $result)
                    @if($result->type_id == 1)
                    <span class="h3" style="color: seagreen;">Presidential</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Registered Votes</th>
                                <th>Accredited</th>
                                <th>APC</th>
                                <th>PDP</th>
                                <th>Others</th>
                                <th>Valid Votes</th>
                                <th>Invalid Votes</th>
                                <th>Total Votes Cast</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @elseif($result->type_id == 2)
                    <span class="h3" style="color: seagreen">Senatorial</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Registered Votes</th>
                                <th>Accredited</th>
                                <th>APC</th>
                                <th>PDP</th>
                                <th>Others</th>
                                <th>Valid</th>
                                <th>Invalid</th>
                                <th>Total Votes Cast</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                 <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    <span class="h3" style="color: seagreen">Representatives</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Registered Votes</th>
                                <th>Accredited</th>
                                <th>APC</th>
                                <th>PDP</th>
                                <th>Others</th>
                                <th>Valid</th>
                                <th>Invalid</th>
                                <th>Total Votes Cast</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$pollingUnit->registered == 0 ? 'Not Available' : $pollingUnit->registered}}</td>
                                <td>{{$pollingUnit->acredited == 0 ? 'Not Available' : $pollingUnit->acredited}}</td>
                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                <td>{{$result->valid_vote == 0 ? 'Not Available' : $result->valid_vote}}</td>
                                <td>{{$result->invalid_vote == 0 ? 'Not Available' : $result->invalid_vote}}</td>
                                <td>{{$result->valid_vote + $result->invalid_vote == 0 ? 'Not Available' : $result->valid_vote + $result->invalid_vote}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                    @endforeach
                    @if($pollingUnit->submitted() == false)
                    <form action="/add_result" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$pollingUnit->id}}">
                        <input type="submit" class="btn btn-primary" value="Edit Result" >
                    </form>
                    @endif
                </div>
            </div>
        </div>   
    </div>
@endforeach
</div>