<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/all.css') }}">
        <script src="{{ mix('js/webshop.js') }}"></script>
        <script src="{{ mix('js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Webshop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produkte verwalten
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Neues Produkt anlegen</a>
                        <a class="dropdown-item" href="#">Produkt l&ouml;schen</a>
                        <a class="dropdown-item" href="#">Produkt bearbeiten</a>
                    </div>
                </li>

            </ul>

            <button>
                <img src="shopping-cart-icon-png-1.png" class="shoppingcart" alt="Warenkorb">
            </button>
        </div>
    </nav>

        <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Webshop
                </div>

                <div class="float-left">
                    @foreach($products as $product)
                        <div class="position-ref float-left" id="products">
                            <img src="{{asset('spielregeln-katze.jpg')}}" alt="Product">
                            <p><b>{{$product->name}}</b></p>
                            <span> <b>Beschreibung:</b> {{$product->description}}</span> <br>
                            <p> <b>Preis:</b> {{$product->price}} &#x80; </p>
                            <button>
                                Zum Warenkorb hinzuf&uuml;gen
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
