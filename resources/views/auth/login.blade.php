<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>

        body{
            background: linear-gradient(to right, rgb(45, 2, 238), rgb(199, 3, 234));
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        #container {
            display: grid;
            margin: 200px;
            height: 100vh;
            grid-template-columns: 2fr 1fr;
            justify-content: center;
            align-items: center;

        }

        #content {
            display: flex;
            text-align: justify;
            flex-direction: column;
            align-items: center;
            /* justify-content: center; */
            padding: 10px;
            height: 100vh;
            background-image: url('{{asset('/images/login.jpg')}}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;

        }

        #form {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            height: 100vh;
        }

        .login_btn{

        }
        .btn{
            background: linear-gradient(to right, rgb(45, 2, 238), rgb(199, 3, 234));
            margin: 5px;
        }


        a{
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div id="container">
        <div id="content">
            <h1>Welcome to Zillion</h1>
            <p>Feel It, your one-stop online clothing destination in Gokarneshwor, Kathmandu. We bring you the latest fashion trends for men, women, and kids, offering high-quality apparel that combines comfort, style, and affordability. Whether you’re shopping for casual wear, formal outfits, or kids’ fashion, Zillion ensures you’ll always find something that fits your style. Login to explore our exclusive collections and experience fashion the way you want — because at Zillion, you don’t just wear it, you feel it.</p>
        </div>

        <div id="form">

            <form action="{{route('login.post')}}" method="POST">

                @csrf
                <h1>USER LOGIN</h1>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email address">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password ">
                </div>

                <div id="login_btn">
                    <div>
                    <a href="">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    @if(session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

            </form>
        </div>
    </div>

</body>

</html>
