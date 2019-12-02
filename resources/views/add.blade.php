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
                    CRUD Data Employee - <strong>TAMBAH DATA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/employees" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/employees/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">

                            @if($errors->has('username'))
                                <div class="text-danger">
                                    {{ $errors->first('username')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Fullname</label>
                            <input name="fullname" class="form-control" placeholder="Fullname">

                             @if($errors->has('fullname'))
                                <div class="text-danger">
                                    {{ $errors->first('fullname')}}
                                </div>
                            @endif

                        </div>
						<div class="form-group">
                            <label>NIK</label>
                            <input name="nik" class="form-control" >

                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif

                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" >

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