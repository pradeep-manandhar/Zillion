@section('nav')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zillion - Feel It</title>

    <style>
        #top {
            background-color: blueviolet;
            color: white;
            height: 2em;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }

        #logo {
            /* margin-right: 60em; */
            margin: 0em 35em 0em 10em;
        }

        #nav_bar {
            display: flex;
            height: 5em;
            background-color: rgb(255, 255, 255);
            padding: 10px;
        }

        .nav {
            width: 500px;
            margin-right: 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav_items:hover{
            color:blueviolet;;
        }

        #body {
            background-image: url('{{ asset('images/cloth.jpg') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            min-height: 100vh;
            width: 100%;
        }

        #content {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0em 0em 0em 5em;
            padding-top: 2em;
        }

        .btn {
            margin: 5em 0 0 5em;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>
{{-- <link rel="stylesheet" href="{{asset('index.css')}}"> --}}
</head>
@endsection

@yield('content')
