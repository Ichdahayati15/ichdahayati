<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pragramming Test</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Employee - <strong>EDIT DATA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/employees" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/employees/update/{{ $employees->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value=" {{ $employees->username }}">

                            @if($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="{{ $employees->fullname }}"> 

                             @if($errors->has('fullname'))
                                <div class="text-danger">
                                    {{ $errors->first('fullname')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control"  value="{{ $employees->nik}}"> 

                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $employees->email }}"> 

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>