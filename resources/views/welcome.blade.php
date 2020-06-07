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
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
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
