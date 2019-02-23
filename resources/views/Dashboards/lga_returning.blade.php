<div class="alert alert-success h3">{{strtoupper($user->lga->name).' LOCAL GOVERNMENT RETURNING OFFICER DASHBOARD'}}</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">          
                @foreach($user->lga->returningResults as $result)
                    @if($result->type_id == 1)
                    <span class="h3" style="color: seagreen;">Presidential</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Registered Voters</th>
                                <th>Accredited Voters</th>
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
                                <td>{{$result->registered == 0 ? 'Not Available' : $result->registered}}</td>
                                <td>{{$result->acredited == 0 ? 'Not Available' : $result->acredited}}</td>
                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                <td>{{$result->pdp + $result->apc + $result->other == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other}}</td>
                                <td>{{$result->invalid == 0 ? 'Not Available' : $result->invalid}}</td>
                                <td>{{$result->pdp + $result->apc + $result->other + $result->invalid == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other + $result->invalid}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @elseif($result->type_id == 2)
                    <span class="h3" style="color: seagreen">Senatorial</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Registered Voters</th>
                                <th>Accredited Voters</th>
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
                                <td>{{$result->registered == 0 ? 'Not Available' : $result->registered}}</td>
                                <td>{{$result->acredited == 0 ? 'Not Available' : $result->acredited}}</td>
                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                <td>{{$result->pdp + $result->apc + $result->other == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other}}</td>
                                <td>{{$result->invalid == 0 ? 'Not Available' : $result->invalid}}</td>
                                <td>{{$result->pdp + $result->apc + $result->other + $result->invalid == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other + $result->invalid}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @else
                    <span class="h3" style="color: seagreen">Representatives</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Registered Voters</th>
                                <th>Accredited Voters</th>
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
                                <td>{{$result->registered == 0 ? 'Not Available' : $result->registered}}</td>
                                <td>{{$result->acredited == 0 ? 'Not Available' : $result->acredited}}</td>
                                <td>{{$result->apc == 0 ? 'Not Available' : $result->apc}}</td>
                                <td>{{$result->pdp == 0 ? 'Not Available' : $result->pdp}}</td>
                                <td>{{$result->other == 0 ? 'Not Available' : $result->other}}</td>
                                <td>{{$result->pdp + $result->apc + $result->other == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other}}</td>
                                <td>{{$result->invalid == 0 ? 'Not Available' : $result->invalid}}</td>
                                <td>{{$result->pdp + $result->apc + $result->other + $result->invalid == 0 ? 'Not Available' : $result->pdp + $result->apc + $result->other + $result->invalid}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                @endforeach

                @if($result->apc == 0)
                  <a class="btn btn-primary" href="/return_result">Insert Result</a>
                @else
                  <a class="btn btn-primary" href="/edit_return_result">Edit Result</a>
                @endif
               
            </div>
        </div>   
    </div>
</div>