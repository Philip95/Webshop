@extends('welcome')

@section('content')
    <div class="card-header">
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Beschreibung</th>
                    <th>Preis</th>
                    <th></th>
                    <th></th>
                </tr>

                <form action="?" method="get">
                    @csrf
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }} &#x80;</td>
                            <td><input class="btn btn-success" type="image" src="{{asset('pencil.png')}}" formaction="{{ route('editform', ['p_id' => $product->p_id]) }}"></td>
                            <td><input class="btn btn-danger" type="image" src="{{asset('trash.png')}}" value="{{$product->p_id}}" onclick="return confirm('Product wirklich löschen?')" formaction="{{ route('delete_product', ['p_id' => $product->p_id]) }}"></td>
                        </tr>
                    @endforeach
                </form>

        </table>
        </div>
    </div>

@endsection
