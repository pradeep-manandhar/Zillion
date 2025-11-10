<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zillion - Feel It</title>

    <style>
        #body {
            background-image: url('{{ asset('images/cloth.jpg') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            min-height: 100vh;
            width: 100%;
        }

    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>



<body>
    <div id="top">
        <h6>FREE SHIPPING ON ORDER OVER NRs. 2000</h6>
    </div>
    <div id="nav_bar">
        <div id="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Zillion logo" width="60px" height="60px">
        </div>
        <div class="nav">
            <div class="nav_items"> Fashion </div>

            <div class="nav_items dropdown">
                Shop
                <div class="dropdown_menu">
                    <a href="{{ url('/shop/men') }}">Men</a>
                    <a href="{{ url('/shop/women') }}">Women</a>
                    <a href="{{ url('/shop/kids') }}">Kids</a>
                </div>
            </div>

            <div class="nav_items"> Blog </div>
            <div class="nav_items"> Contact </div>
            <div class="nav_items"> <i class="fa-solid fa-magnifying-glass"></i> </div>
            <div class="nav_items"> <i class="fa-regular fa-heart"></i></div>
            <div class="nav_items"> <i class="fa-regular fa-user"></i> </div>
            <div class="nav_items"> <i class="fa-solid fa-cart-plus"></i> </div>
        </div>

    </div>

    <div id="body">
        <div id="content">
            <h6>WE'RE PROUD TO</h6>
            <h6>INTRODUCE</h6>
            <h1>ZILLION</h1>
            <h3>Exclusively from Gokarneshwor, Kathmandu</h3>
        </div>
        <button type="button" class="btn btn-primary">SHOP NOW</button>
    </div>
</body>

</html>
