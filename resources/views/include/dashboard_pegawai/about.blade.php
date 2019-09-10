<div class="card shadow bordered">
    <div class="card-header text-primary">
        <b>About</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
            </table>
        </div>
    </div>
</div>