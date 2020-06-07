<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           .position-ref {
                position: relative;
            }

            .title {
                font-size: 84px;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .float-left {
                float: left;
                margin: 10px;
            }
            #products {
                width: 270px;
                height: 300px;
                border-style: solid;
                text-align: center;
                padding: 5px;
                margin-left: 10%;
            }
            
            img {
                width: 100px;
                height: 100px;
            }

        </style>
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

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
