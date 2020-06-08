@extends('welcome')

@section('content')
<div class="position-ref">
    <div class="content">
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
                <div class="container justify-content-center clear_center position-ref d-flex">
                    <div class="position-ref">
                        {{$products->links()}}
                    </div>
                </div>
        </div>
    </div>
</div>




@endsection
