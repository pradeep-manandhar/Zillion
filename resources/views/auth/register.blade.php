<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <style>
        body {
            background: linear-gradient(45deg, rgb(199, 3, 234), rgb(45, 2, 238));
        }

        h1{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        }

        #form {
            height: 80vh;
            width: 85vw;
            margin: 7em;
            padding: 2em;
            background-color: white;
        }

        .btn{
            background: linear-gradient(45deg, rgb(199, 3, 234), rgb(45, 2, 238));
            margin: 2em;
            width: 75vw;
        }

        .btn:hover{
            background: linear-gradient(45deg,rgb(45, 2, 238), rgb(199, 3, 234) );
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div id="form">
        <h1>Registration Form</h1>
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fullname" class="form-label">Fullname</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Please Enter your fullname" value="{{old('fullname')}}">
                    @error('fullname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Please Enter your username" value="{{old('username')}}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Please Enter your email address" value="{{old('email')}}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="number" class="form-label">Mobile number </label>
                    <input type="number" class="form-control" id="number" name="number"
                        placeholder="Please Enter your mobile number " value="{{old('number')}}">
                    @error('number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Please Enter your password" value="{{old('password')}}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}"
                        placeholder="Please Enter your password again">
                </div>
            </div>


            <label class="form-label d-block">Gender</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="others" value="others">
                <label class="form-check-label" for="others">Prefer not to say</label>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
</body>

</html>
