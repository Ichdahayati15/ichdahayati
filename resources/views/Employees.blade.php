<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Programming Test</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Employee 
                    </div>
                <div class="card-body">
                    <a href="/employees/add" class="btn btn-primary">Add</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Fullname</th>
                                <th>NIK</th>
                                <th>Email</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $m)
                            <tr>
                                <td>{{ $m->username }}</td>
                                <td>{{ $m->fullname }}</td>
                                <td>{{ $m->nik }}</td>
                                <td>{{ $m->email }}</td>
                                <td>
                                    <a href="/employees/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/employees/delete/{{ $m->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>