@extends('welcome')

@section('content')
    <div class="title m-b-md">
        Webshop
    </div>
    <div id="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining
        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
        including versions of Lorem Ipsum.
    </div>
    <div class="container wide" style="padding: 5px;">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('Produktübersicht') }}</div>
                        <div class="card-body">
                            <div class="position-ref container justify-content-center">
                               <div class="content">
                                    <div class="float-left">
                                        @foreach($products as $product)
                                            <div class="position-ref float-left" id="products">
                                                <img src="{{asset('spielregeln-katze.jpg')}}" class="img_padding" alt="Product">
                                                <p><strong>{{$product->name}}</strong></p>
                                                <span> <strong>Beschreibung:</strong> {{$product->description}}</span> <br>
                                                <p> <strong>Preis:</strong> {{$product->price}} &#x80; </p>
                                                <button onclick="addToShoppingCart({{$product->p_id}})" id="produkt{{$product->p_id}}">
                                                    Zum Warenkorb hinzuf&uuml;gen
                                                </button>
                                            </div>
                                        @endforeach
                                            <div class="container justify-content-center clear_center position-ref d-flex">
                                                <div>
                                                    {{$products->links()}}
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
