<div class="col-sm-12">
    <div class="card">
        <div class="card-header h3" style="color: white; background-color: seagreen;">Report incidence</div>

        <div class="card-body">
            <form action="/new_incidence" method="post">
                @csrf
                <button name="incidence" class="btn btn-danger btn-block" value="Violence">Violence</button>
                <button name="incidence" class="btn btn-danger btn-block" value="Valot Snatching">Valot Snatching</button>
                <button name="incidence" class="btn btn-danger btn-block" value="Vote Selling">Vote Selling</button>
                <button name="incidence" class="btn btn-danger btn-block" value="Vote Buying">Vote Buying</button>
                <button name="incidence" class="btn btn-danger btn-block" value="Absence of Security">Absence of Security</button>
                <button name="incidence" class="btn btn-danger btn-block" value="Late Arrival Of Material Or Staff">Late Arrival Of Material Or Staff</button>
            </form>
        </div>
    </div>
</div>