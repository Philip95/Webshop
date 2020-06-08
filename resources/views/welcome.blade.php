<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/all.css') }}">

        <script src="{{ mix('js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="{{ mix('js/webshop.js') }}"></script>

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route( 'home') }}">Katzen-Webshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produkte verwalten
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('verwalten') }}"> Produkte verwalten </a>
                        <a class="dropdown-item" href="{{ route('insert_form') }}">Neues Produkt anlegen</a>
                    </div>
                </li>

            </ul>

            <button>
                <img src="{{asset('shopping-cart-icon-png-1.png')}}" class="shoppingcart" alt="Warenkorb">
            </button>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>



    </body>
</html>
