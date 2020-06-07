<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/css.css')}}">
        <script src="{{ asset('js/webshop.js') }}"></script>
    </head>
    <body>
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
